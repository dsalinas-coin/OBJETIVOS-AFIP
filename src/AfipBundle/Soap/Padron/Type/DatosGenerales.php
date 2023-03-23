<?php

namespace AfipBundle\Soap\Padron\Type;

class DatosGenerales
{

    /**
     * @var string
     */
    private $apellido = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\Caracterizacion
     */
    private $caracterizacion = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\Dependencia
     */
    private $dependencia = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\Domicilio
     */
    private $domicilioFiscal = null;

    /**
     * @var string
     */
    private $estadoClave = null;

    /**
     * @var \DateTime
     */
    private $fechaContratoSocial = null;

    /**
     * @var \DateTime
     */
    private $fechaFallecimiento = null;

    /**
     * @var int
     */
    private $idPersona = null;

    /**
     * @var int
     */
    private $mesCierre = null;

    /**
     * @var string
     */
    private $nombre = null;

    /**
     * @var string
     */
    private $razonSocial = null;

    /**
     * @var string
     */
    private $tipoClave = null;

    /**
     * @var string
     */
    private $tipoPersona = null;

    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     * @return DatosGenerales
     */
    public function withApellido($apellido)
    {
        $new = clone $this;
        $new->apellido = $apellido;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\Caracterizacion
     */
    public function getCaracterizacion()
    {
        return $this->caracterizacion;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Caracterizacion $caracterizacion
     * @return DatosGenerales
     */
    public function withCaracterizacion($caracterizacion)
    {
        $new = clone $this;
        $new->caracterizacion = $caracterizacion;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\Dependencia
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Dependencia $dependencia
     * @return DatosGenerales
     */
    public function withDependencia($dependencia)
    {
        $new = clone $this;
        $new->dependencia = $dependencia;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\Domicilio
     */
    public function getDomicilioFiscal()
    {
        return $this->domicilioFiscal;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Domicilio $domicilioFiscal
     * @return DatosGenerales
     */
    public function withDomicilioFiscal($domicilioFiscal)
    {
        $new = clone $this;
        $new->domicilioFiscal = $domicilioFiscal;

        return $new;
    }

    /**
     * @return string
     */
    public function getEstadoClave()
    {
        return $this->estadoClave;
    }

    /**
     * @param string $estadoClave
     * @return DatosGenerales
     */
    public function withEstadoClave($estadoClave)
    {
        $new = clone $this;
        $new->estadoClave = $estadoClave;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaContratoSocial()
    {
        return $this->fechaContratoSocial;
    }

    /**
     * @param \DateTime $fechaContratoSocial
     * @return DatosGenerales
     */
    public function withFechaContratoSocial($fechaContratoSocial)
    {
        $new = clone $this;
        $new->fechaContratoSocial = $fechaContratoSocial;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaFallecimiento()
    {
        return $this->fechaFallecimiento;
    }

    /**
     * @param \DateTime $fechaFallecimiento
     * @return DatosGenerales
     */
    public function withFechaFallecimiento($fechaFallecimiento)
    {
        $new = clone $this;
        $new->fechaFallecimiento = $fechaFallecimiento;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param int $idPersona
     * @return DatosGenerales
     */
    public function withIdPersona($idPersona)
    {
        $new = clone $this;
        $new->idPersona = $idPersona;

        return $new;
    }

    /**
     * @return int
     */
    public function getMesCierre()
    {
        return $this->mesCierre;
    }

    /**
     * @param int $mesCierre
     * @return DatosGenerales
     */
    public function withMesCierre($mesCierre)
    {
        $new = clone $this;
        $new->mesCierre = $mesCierre;

        return $new;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return DatosGenerales
     */
    public function withNombre($nombre)
    {
        $new = clone $this;
        $new->nombre = $nombre;

        return $new;
    }

    /**
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * @param string $razonSocial
     * @return DatosGenerales
     */
    public function withRazonSocial($razonSocial)
    {
        $new = clone $this;
        $new->razonSocial = $razonSocial;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoClave()
    {
        return $this->tipoClave;
    }

    /**
     * @param string $tipoClave
     * @return DatosGenerales
     */
    public function withTipoClave($tipoClave)
    {
        $new = clone $this;
        $new->tipoClave = $tipoClave;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoPersona()
    {
        return $this->tipoPersona;
    }

    /**
     * @param string $tipoPersona
     * @return DatosGenerales
     */
    public function withTipoPersona($tipoPersona)
    {
        $new = clone $this;
        $new->tipoPersona = $tipoPersona;

        return $new;
    }


}

