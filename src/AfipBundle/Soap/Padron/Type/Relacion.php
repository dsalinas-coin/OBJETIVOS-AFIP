<?php

namespace AfipBundle\Soap\Padron\Type;

class Relacion
{

    /**
     * @var string
     */
    private $apellidoPersonaAsociada = null;

    /**
     * @var \DateTime
     */
    private $ffRelacion = null;

    /**
     * @var \DateTime
     */
    private $ffVencimiento = null;

    /**
     * @var int
     */
    private $idPersonaAsociada = null;

    /**
     * @var string
     */
    private $nombrePersonaAsociada = null;

    /**
     * @var string
     */
    private $razonSocialPersonaAsociada = null;

    /**
     * @var string
     */
    private $tipoComponente = null;

    /**
     * @return string
     */
    public function getApellidoPersonaAsociada()
    {
        return $this->apellidoPersonaAsociada;
    }

    /**
     * @param string $apellidoPersonaAsociada
     * @return Relacion
     */
    public function withApellidoPersonaAsociada($apellidoPersonaAsociada)
    {
        $new = clone $this;
        $new->apellidoPersonaAsociada = $apellidoPersonaAsociada;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFfRelacion()
    {
        return $this->ffRelacion;
    }

    /**
     * @param \DateTime $ffRelacion
     * @return Relacion
     */
    public function withFfRelacion($ffRelacion)
    {
        $new = clone $this;
        $new->ffRelacion = $ffRelacion;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFfVencimiento()
    {
        return $this->ffVencimiento;
    }

    /**
     * @param \DateTime $ffVencimiento
     * @return Relacion
     */
    public function withFfVencimiento($ffVencimiento)
    {
        $new = clone $this;
        $new->ffVencimiento = $ffVencimiento;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdPersonaAsociada()
    {
        return $this->idPersonaAsociada;
    }

    /**
     * @param int $idPersonaAsociada
     * @return Relacion
     */
    public function withIdPersonaAsociada($idPersonaAsociada)
    {
        $new = clone $this;
        $new->idPersonaAsociada = $idPersonaAsociada;

        return $new;
    }

    /**
     * @return string
     */
    public function getNombrePersonaAsociada()
    {
        return $this->nombrePersonaAsociada;
    }

    /**
     * @param string $nombrePersonaAsociada
     * @return Relacion
     */
    public function withNombrePersonaAsociada($nombrePersonaAsociada)
    {
        $new = clone $this;
        $new->nombrePersonaAsociada = $nombrePersonaAsociada;

        return $new;
    }

    /**
     * @return string
     */
    public function getRazonSocialPersonaAsociada()
    {
        return $this->razonSocialPersonaAsociada;
    }

    /**
     * @param string $razonSocialPersonaAsociada
     * @return Relacion
     */
    public function withRazonSocialPersonaAsociada($razonSocialPersonaAsociada)
    {
        $new = clone $this;
        $new->razonSocialPersonaAsociada = $razonSocialPersonaAsociada;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoComponente()
    {
        return $this->tipoComponente;
    }

    /**
     * @param string $tipoComponente
     * @return Relacion
     */
    public function withTipoComponente($tipoComponente)
    {
        $new = clone $this;
        $new->tipoComponente = $tipoComponente;

        return $new;
    }


}

