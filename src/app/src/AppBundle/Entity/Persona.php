<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 30/10/17
 * Time: 12:45
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonaRepository")
 */
class Persona
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column(type="string", length=100)
     *  @Assert\NotBlank(message="Completar este campo del formulario")
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Completar este campo del formulario")
     */
    protected $apellido;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Servicio")
     */
    protected $servicios;


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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Set servicios
     *
     * @param \AppBundle\Entity\Servicio $servicios
     *
     * @return Persona
     */
    public function setServicios(\AppBundle\Entity\Servicio $servicios = null)
    {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return \AppBundle\Entity\Servicio
     */
    public function getServicios()
    {
        return $this->servicios;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->servicios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     *
     * @return Persona
     */
    public function addServicio(\AppBundle\Entity\Servicio $servicio)
    {
        $this->servicios[] = $servicio;

        return $this;
    }

    /**
     * Remove servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     */
    public function removeServicio(\AppBundle\Entity\Servicio $servicio)
    {
        $this->servicios->removeElement($servicio);
    }
}
