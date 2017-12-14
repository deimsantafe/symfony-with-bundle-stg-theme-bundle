<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;

class BaseBootstrapController extends Controller
{

    /**
     * @Route("/", name="vistaBootstrap")
     * @return mixed
     */
    public function vistaAction()
    {

        $em = $this->getDoctrine()->getManager();

        $personas = $em->getRepository('AppBundle:Persona')->findAll();

        return $this->render('AppBundle::baseBootstrap.html.twig', array('personas' => $personas , 'datos_encabezado_title' => 'titulo personalizado', 'datos_encabezado_entity' => 'entidad r'));

    }


    /**
     * @Route("altaPersonaBootstrap",name="altaPersonaBootstrap")
     */
    public function indexAction(Request $request)
    {

        $persona = new Persona();

        $formulario = $this->createForm('AppBundle\Form\PersonaType', $persona);

        $formulario->handleRequest($request);

        if ($formulario->isValid()) {

            // Validar los datos enviados y guardarlos en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($persona);
            $em->flush();

            $this->addFlash('info', 'Datos registrados correctamente.');

            return $this->redirectToRoute('vistaBootstrap');
        }

        return $this->render('AppBundle:Persona:personaAltaBootstrap.html.twig', ['formulario' => $formulario->createView()]);
    }


}