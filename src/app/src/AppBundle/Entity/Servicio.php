<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 30/10/17
 * Time: 13:57
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Servicio
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    protected $nombreServicio;

    /**
     * @ORM\Column(type="string",length=100)
     */
    protected $codigoServicio;

    /**
     * @ORM\Column(type="decimal",precision=10, scale=2)
     */
    protected $costoServicio;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Persona")
     */
    protected $personas;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * @param mixed $nombreServicio
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;
    }

    /**
     * @return mixed
     */
    public function getCodigoServicio()
    {
        return $this->codigoServicio;
    }

    /**
     * @param mixed $codigoServicio
     */
    public function setCodigoServicio($codigoServicio)
    {
        $this->codigoServicio = $codigoServicio;
    }

    /**
     * @return mixed
     */
    public function getCostoServicio()
    {
        return $this->costoServicio;
    }

    /**
     * @param mixed $costoServicio
     */
    public function setCostoServicio($costoServicio)
    {
        $this->costoServicio = $costoServicio;
    }

    public function __toString()
    {
        return $this->getNombreServicio();
    }


    /**
     * Set personas
     *
     * @param \AppBundle\Entity\Persona $personas
     *
     * @return Servicio
     */
    public function setPersonas(\AppBundle\Entity\Persona $personas = null)
    {
        $this->personas = $personas;

        return $this;
    }

    /**
     * Get personas
     *
     * @return \AppBundle\Entity\Persona
     */
    public function getPersonas()
    {
        return $this->personas;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add persona
     *
     * @param \AppBundle\Entity\Persona $persona
     *
     * @return Servicio
     */
    public function addPersona(\AppBundle\Entity\Persona $persona)
    {
        $this->personas[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \AppBundle\Entity\Persona $persona
     */
    public function removePersona(\AppBundle\Entity\Persona $persona)
    {
        $this->personas->removeElement($persona);
    }
}
