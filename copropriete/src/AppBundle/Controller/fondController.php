<?php

namespace AppBundle\Controller;

use AppBundle\Entity\fond;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fond controller.
 *
 * @Route("fond")
 */
class fondController extends Controller
{
    /**
     * Lists all fond entities.
     *
     * @Route("/", name="fond_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fonds = $em->getRepository('AppBundle:fond')->findAll();

        return $this->render('fond/index.html.twig', array(
            'fonds' => $fonds,
        ));
    }

    /**
     * Creates a new fond entity.
     *
     * @Route("/new", name="fond_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fond = new Fond();
        $form = $this->createForm('AppBundle\Form\fondType', $fond);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fond);
            $em->flush();

            return $this->redirectToRoute('fond_show', array('id' => $fond->getId()));
        }

        return $this->render('fond/new.html.twig', array(
            'fond' => $fond,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fond entity.
     *
     * @Route("/{id}", name="fond_show")
     * @Method("GET")
     */
    public function showAction(fond $fond)
    {
        $deleteForm = $this->createDeleteForm($fond);

        return $this->render('fond/show.html.twig', array(
            'fond' => $fond,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fond entity.
     *
     * @Route("/{id}/edit", name="fond_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, fond $fond)
    {
        $deleteForm = $this->createDeleteForm($fond);
        $editForm = $this->createForm('AppBundle\Form\fondType', $fond);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fond_edit', array('id' => $fond->getId()));
        }

        return $this->render('fond/edit.html.twig', array(
            'fond' => $fond,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fond entity.
     *
     * @Route("/{id}", name="fond_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, fond $fond)
    {
        $form = $this->createDeleteForm($fond);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fond);
            $em->flush();
        }

        return $this->redirectToRoute('fond_index');
    }

    /**
     * Creates a form to delete a fond entity.
     *
     * @param fond $fond The fond entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(fond $fond)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fond_delete', array('id' => $fond->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
