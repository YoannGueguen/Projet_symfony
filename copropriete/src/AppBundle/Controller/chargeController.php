<?php

namespace AppBundle\Controller;

use AppBundle\Entity\charge;
use AppBundle\Entity\user;
use AppBundle\Entity\contrat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Charge controller.
 *
 * @Route("charge")
 */
class chargeController extends Controller
{
    /**
     * Lists all charge entities.
     *
     * @Route("/", name="charge_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $charges = $em->getRepository('AppBundle:charge')->findAll();

        return $this->render('charge/index.html.twig', array(
            'charges' => $charges,
        ));
    }

    /**
     * Creates a new charge entity.
     *
     * @Route("/new", name="charge_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $charge = new Charge();
        $form = $this->createForm('AppBundle\Form\chargeType', $charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($charge);
            if($form->getData()->getContratId()!=""){
                $charge= $form->getData();
                $this->sendEmailToUsersNew($charge,$charge->getContratId());
            }
            $em->flush();

            return $this->redirectToRoute('charge_show', array('id' => $charge->getId()));
        }

        return $this->render('charge/new.html.twig', array(
            'charge' => $charge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a charge entity.
     *
     * @Route("/{id}", name="charge_show")
     * @Method("GET")
     */
    public function showAction(charge $charge)
    {
        $deleteForm = $this->createDeleteForm($charge);

        return $this->render('charge/show.html.twig', array(
            'charge' => $charge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing charge entity.
     *
     * @Route("/{id}/edit", name="charge_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, charge $charge)
    {
        $deleteForm = $this->createDeleteForm($charge);
        $editForm = $this->createForm('AppBundle\Form\chargeType', $charge);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            if($editForm->getData()->getContratId()!=""){
                $charge= $editForm->getData();
                $this->sendEmailToUsersNew($charge,$charge->getContratId());
            }
            return $this->redirectToRoute('charge_edit', array('id' => $charge->getId()));
        }

        return $this->render('charge/edit.html.twig', array(
            'charge' => $charge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a charge entity.
     *
     * @Route("/{id}", name="charge_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, charge $charge)
    {
        $form = $this->createDeleteForm($charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($charge);
            $em->flush();
        }

        return $this->redirectToRoute('charge_index');
    }

    public function sendEmailContratNew(contrat $contrat, user $user){
        $destination = $user->getEmail();
        $mail = (new \Swift_Message('Notification'))
            ->setFrom('clorporate@gmail.com')
            ->setTo($destination)
            ->setBody(
                $this->renderView(
                    'email/contrat',
                    array('name' => $this->getUser()->getUsername(),
                        'nomcontrat' =>$contrat->getNom(),
                        'datefin' =>$contrat->getDateFin()->format('d/m/y'),
                        'datesignature'=>$contrat->getDateSignature()->format('d/m/y')
                    )
                ),
                'text/html'
            );
        $this->get('mailer')->send($mail);
    }

    public function sendEmailToUsersNew(charge $charge,contrat $contrat){
        foreach ($charge->getUtilisateurs() as $user) {
            $this->sendEmailContratNew($contrat,$user);
        }
    }

    /**
     * Creates a form to delete a charge entity.
     *
     * @param charge $charge The charge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(charge $charge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('charge_delete', array('id' => $charge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
