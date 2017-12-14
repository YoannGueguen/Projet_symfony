<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $charges = $em->getRepository('AppBundle:charge')->findAll();
        $em = $this->getDoctrine()->getManager();

        $discussions = $em->getRepository('AppBundle:discussion')->findAll();
        $em = $this->getDoctrine()->getManager();

        $projets = $em->getRepository('AppBundle:projet')->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'projets' => $projets,
            'discussions' => $discussions,
            'charges' => $charges,

        ]);
    }
}
