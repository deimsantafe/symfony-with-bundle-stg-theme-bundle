<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 01/11/17
 * Time: 10:51
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PersonaRepository extends EntityRepository
{

    /**
     *
     */
    public function findPersonaConServicios()
    {

        $em = $this->getEntityManager();

        $dql = 'SELECT p
                  FROM AppBundle:Persona p
                  WHERE 1 = 1
                  ORDER BY p.apellido, p.nombre
        
        ';

        $consulta = $em->createQuery($dql);

        //$consulta->setParameter();
        return $consulta->getResult();

    }

}