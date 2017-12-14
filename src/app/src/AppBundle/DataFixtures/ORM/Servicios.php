<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Servicio;

class Servicios implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $servicios = [
            [
                'nombre_servicio' => 'Desarrollo Web',
                'codigo_servicio' => 'DW',
                'costo_servicio' => '550.00',
            ],
            [
                'nombre_servicio' => 'Servicios LAMP',
                'codigo_servicio' => 'SL',
                'costo_servicio' => '480.50',
            ],
        ];

        foreach ($servicios as $servicio) {

            $entidad = new Servicio();

            $entidad->setCodigoServicio($servicio['codigo_servicio']);
            $entidad->setNombreServicio($servicio['nombre_servicio']);
            $entidad->setCostoServicio($servicio['costo_servicio']);

            $manager->persist($entidad);
        }

        $manager->flush();

    }
}
