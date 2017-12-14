<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Persona;

class Personas implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $personas = array(
            array('nombre' => 'Lucas', 'apellido' => 'madrileño'),
            array('nombre' => 'Pepe', 'apellido' => 'Verdú'),
        );

        $serviciosPersonas = [
            [''=>''],
            [''=>'']
        ];

        foreach ($personas as $persona) {
            $entidad = new Persona();
            $entidad->setNombre($persona['nombre']);
            $entidad->setApellido($persona['apellido']);

            //$entidad->setServicios();

            $manager->persist($entidad);
        }

        $manager->flush();

    }
}
