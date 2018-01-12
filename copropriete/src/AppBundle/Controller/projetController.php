<?php

namespace AppBundle\Controller;

use AppBundle\Entity\note;
use AppBundle\Entity\projet;
use AppBundle\Entity\user;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Projet controller.
 *
 * @Route("projet")
 */
class projetController extends Controller
{
    /**
     * Lists all projet entities.
     *
     * @Route("/", name="projet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projets = $em->getRepository('AppBundle:projet')->findAll();

        return $this->render('projet/index.html.twig', array(
            'projets' => $projets,
        ));
    }

    /**
     * Creates a new projet entity.
     *
     * @Route("/new", name="projet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('AppBundle\Form\projetType', $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $users = $projet->getUtilisateurs();
            //$this->sendEmailToUsersNew($users);
            $em->flush();

            return $this->redirectToRoute('projet_show', array('id' => $projet->getId()));
        }

        return $this->render('projet/new.html.twig', array(
            'projet' => $projet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a projet entity.
     *
     * @Route("/{id}", name="projet_show")
     * @Method("GET")
     */
    public function showAction(projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);
        return $this->render('projet/show.html.twig', array(
            'projet' => $projet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing projet entity.
     *
     * @Route("/{id}/edit", name="projet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);
        $editForm = $this->createForm('AppBundle\Form\projetType', $projet);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();
            $users = $editForm->getData();
            $this->sendEmailToUsersEdit($users);
            return $this->redirectToRoute('projet_edit', array('id' => $projet->getId()));
        }

        return $this->render('projet/edit.html.twig', array(
            'projet' => $projet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a projet entity.
     *
     * @Route("/{id}", name="projet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, projet $projet)
    {
        $form = $this->createDeleteForm($projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
        }

        return $this->redirectToRoute('projet_index');
    }

    public function sendEmailProjetEdit(projet $projet, user $user){
        $destination = $user->getEmail();
        $mail = (new \Swift_Message('Notification'))
            ->setFrom('clorporate@gmail.com')
            ->setTo($destination)
            ->setBody(
                $this->renderView(
                    'email/projet_edit',
                    array('name' => $this->getUser()->getUsername(),
                        'descprojet' =>$projet->getDescription(),
                        'nomprojet' =>$projet->getTitre(),
                        'datefin' =>$projet->getDateFin()->format('d/m/Y'),
                        'datedebut' =>$projet->getDateDebut()->format('d/m/Y'),
                    )
                ),
                'text/html'
            );
        $this->get('mailer')->send($mail);
    }

    public function sendEmailProjetNew(projet $projet, user $user){
        $destination = $user->getEmail();
        $mail = (new \Swift_Message('Notification'))
            ->setFrom('clorporate@gmail.com')
            ->setTo($destination)
            ->setBody(
                $this->renderView(
                    'email/projet_new',
                    array('name' => $this->getUser()->getUsername(),
                        'descprojet' =>$projet->getDescription(),
                        'nomprojet' =>$projet->getTitre(),
                        'datefin' =>$projet->getDateFin()->format('d/m/Y'),
                        'datedebut' =>$projet->getDateDebut()->format('d/m/Y'),
                        )
                ),
                'text/html'
            );
        $this->get('mailer')->send($mail);
    }

    public function sendEmailToUsersEdit(projet $projet){
        foreach ($projet->getUtilisateurs() as $user) {
            $this->sendEmailProjetEdit($projet,$user);
        }
    }

    public function sendEmailToUsersNew(projet $projet){
        foreach ($projet->getUtilisateurs() as $user) {
            $this->sendEmailProjetNew($projet,$user);
        }
    }



    /**
     * Creates a form to delete a projet entity.
     *
     * @param projet $projet The projet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(projet $projet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('id' => $projet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
