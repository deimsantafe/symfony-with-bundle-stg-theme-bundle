<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Entity\Persona;

class PersonaExtension extends \Twig_Extension
{


    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('getApellidoNombre', array($this, 'getApellidoNombre')),
        );
    }

    public function getName()
    {
        return 'persona';
    }

    /**
     * @param $nombre
     * @param $apellido
     * @return string
     */
    public function getApellidoNombre($apellido, $nombre)
    {
        //formatea el nombre completo
        $resultado = strtolower($apellido.', '.$nombre);

        return ucwords($resultado);
    }
}