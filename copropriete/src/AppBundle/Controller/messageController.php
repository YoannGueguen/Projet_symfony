<?php

namespace AppBundle\Controller;

use AppBundle\Entity\discussion;
use AppBundle\Entity\message;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Swift_Mailer;

/**
 * Message controller.
 *
 * @Route("message")
 */
class messageController extends Controller
{
    /**
     * Lists all message entities.
     *
     * @Route("/", name="message_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $messages = $em->getRepository('AppBundle:message')->findAll();

        return $this->render('message/index.html.twig.twig', array(
            'messages' => $messages,
        ));
    }

    /**
     * Creates a new message entity.
     *
     * @Route("/new", name="message_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $message = new Message();
        //$options = array('current_user' => $this->getUser());
        $form = $this->createForm('AppBundle\Form\messageType', $message);
        $form->handleRequest($request);
        $message = $form->getData();
        //remplissage auto des champs
        $message->setUserId($this->getUser());
        //$message->setDiscussionId();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('message_show', array('id' => $message->getId()));
        }

        return $this->render('message/new.html.twig.twig', array(
            'message' => $message,
            'form' => $form->createView()
        ));
    }

    /**
     * Creates a new message entity.
     *
     * @Route("/newm", name="message_new_discu")
     * @Method({"GET", "POST"})
     */
    public function newAlterAction(Request $request)
    {
        $message = new Message();
        $discuId = substr($request->getUri(), -1);
        $form = $this->createForm('AppBundle\Form\messageType', $message);
        $form->handleRequest($request);
        $message = $form->getData();
        //remplissage auto des champs
        $message->setUserId($this->getUser());
        $discu =$this->getDoctrine()->getManager()->getRepository('AppBundle:discussion')->find($discuId);
        $message->setDiscussionId($discu);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            //$this->sendEmailMessageReceived($form->getData());
            $em->flush();

            return $this->redirectToRoute('discussion_show', array('id' => $discu->getId()));
        }

        return $this->render('message/new.html.twig.twig', array(
            'message' => $message,
            'form' => $form->createView()
        ));
    }

    public function sendEmailMessageReceived(message $message){
        $mail = (new \Swift_Message('Notification'))
            ->setFrom('clorporate@gmail.com')
            ->setTo('akeribin@gmail.com')
            //->setBody('you should receive the mail bitch !')
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'email/message.html.twig',
                    array('name' => $this->getUser()->getUsername(),
                        'message' =>$message->getContenu())
                ),
                'text/html'
            );

        $this->get('mailer')->send($mail);
    }

    /**
     * Finds and displays a message entity.
     *
     * @Route("/{id}", name="message_show")
     * @Method("GET")
     */
    public function showAction(message $message)
    {
        $deleteForm = $this->createDeleteForm($message);

        return $this->render('message/show.html.twig.twig', array(
            'message' => $message,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing message entity.
     *
     * @Route("/{id}/edit", name="message_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, message $message)
    {
        $deleteForm = $this->createDeleteForm($message);
        $editForm = $this->createForm('AppBundle\Form\messageType', $message);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('message_edit', array('id' => $message->getId()));
        }

        return $this->render('message/edit.html.twig.twig', array(
            'message' => $message,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a message entity.
     *
     * @Route("/{id}", name="message_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, message $message)
    {
        $form = $this->createDeleteForm($message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
        }

        return $this->redirectToRoute('message_index');
    }

    /**
     * Creates a form to delete a message entity.
     *
     * @param message $message The message entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(message $message)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('message_delete', array('id' => $message->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
