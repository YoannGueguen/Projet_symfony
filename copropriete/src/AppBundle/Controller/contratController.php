<?php

namespace AppBundle\Controller;

use AppBundle\Entity\contrat;
use AppBundle\Entity\charge;
use AppBundle\Entity\user;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\chargeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contrat controller.
 *
 * @Route("contrat")
 */
class contratController extends Controller
{
    /**
     * Creates a new contrat entity.
     *
     * @Route("/new", name="contrat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contrat = new Contrat();
        $form = $this->createForm('AppBundle\Form\contratType', $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrat);
            $repoCharge = $this->getDoctrine()->getManager()->getRepository('AppBundle:charge');
            $contrat = $form->getData();
            $charge = $repoCharge->findUsersByContrat($contrat);
            $charge = array_shift($charge);
            $this->sendEmailToUsersNew($charge,$contrat);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('contrat/new.html.twig', array(
            'contrat' => $contrat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contrat entity.
     *
     * @Route("/{id}", name="contrat_show")
     * @Method("GET")
     */
    public function showAction(contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);

        return $this->render('contrat/show.html.twig', array(
            'contrat' => $contrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contrat entity.
     *
     * @Route("/{id}/edit", name="contrat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);
        $editForm = $this->createForm('AppBundle\Form\contratType', $contrat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contrat_edit', array('id' => $contrat->getId()));
        }

        return $this->render('contrat/edit.html.twig', array(
            'contrat' => $contrat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contrat entity.
     *
     * @Route("/{id}", name="contrat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, contrat $contrat)
    {
        $form = $this->createDeleteForm($contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('contrat_index');
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
     * Creates a form to delete a contrat entity.
     *
     * @param contrat $contrat The contrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(contrat $contrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contrat_delete', array('id' => $contrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
