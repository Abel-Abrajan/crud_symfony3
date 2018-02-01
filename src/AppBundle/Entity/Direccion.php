<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DireccionRepository")
 */
class Direccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=200, nullable=true)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="colonia", type="string", length=200)
     */
    private $colonia;

    /**
     * @var string
     *
     * @ORM\Column(name="delegacion", type="string", length=200, nullable=true)
     */
    private $delegacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=100, nullable=true)
     */
    private $numero;


    #######################
    //...
    /** 
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="direccion")
    */

    private $usuario;

    /**
     * Get id
     *
     * @return int
     */



    

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return Direccion
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return Direccion
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Direccion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    ###############################
    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Direccion
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function __toString()
    {
        return $this->delegacion;
    }
}

