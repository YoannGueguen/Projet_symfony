<?php

namespace AppBundle\Controller;

use AppBundle\Entity\note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Note controller.
 *
 * @Route("note")
 */
class noteController extends Controller
{
    /**
     * Lists all note entities.
     *
     * @Route("/", name="note_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('AppBundle:note')->findAll();

        return $this->render('note/index.html.twig', array(
            'notes' => $notes,
        ));
    }

    /**
     * Creates a new note entity.
     *
     * @Route("/new/{projetId}", name="note_new", requirements={"projetId"="\d+"})
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $projetId)
    {
        $form = $this->createForm('AppBundle\Form\noteType', new Note());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $projet = $em->getRepository('AppBundle:projet')->findOneBy(["id" => $projetId]);

            $note = $form->getData();
            $note->setUserId($this->getUser());
            $note->setProjet($projet);

            $em->persist($note);
            $em->flush();

            return $this->redirectToRoute('projet_show', array('id' => $projetId));
        }

        return $this->render('note/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a note entity.
     *
     * @Route("/{id}", name="note_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(note $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('note/show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing note entity.
     *
     * @Route("/{id}/edit", name="note_edit", requirements={"id"="\d+"})
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, note $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('AppBundle\Form\noteType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('note_edit', array('id' => $note->getId()));
        }

        return $this->render('note/edit.html.twig', array(
            'note' => $note,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a note entity.
     *
     * @Route("/{id}", name="note_delete", requirements={"id"="\d+"})
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, note $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();
        }

        return $this->redirectToRoute('note_index');
    }

    /**
     * Creates a form to delete a note entity.
     *
     * @param note $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(note $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('note_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
