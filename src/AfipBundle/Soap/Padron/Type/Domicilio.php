<?php

namespace AfipBundle\Soap\Padron\Type;

class Domicilio
{

    /**
     * @var string
     */
    private $codPostal = null;

    /**
     * @var string
     */
    private $datoAdicional = null;

    /**
     * @var string
     */
    private $descripcionProvincia = null;

    /**
     * @var string
     */
    private $direccion = null;

    /**
     * @var int
     */
    private $idProvincia = null;

    /**
     * @var string
     */
    private $localidad = null;

    /**
     * @var string
     */
    private $tipoDatoAdicional = null;

    /**
     * @var string
     */
    private $tipoDomicilio = null;

    /**
     * @return string
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * @param string $codPostal
     * @return Domicilio
     */
    public function withCodPostal($codPostal)
    {
        $new = clone $this;
        $new->codPostal = $codPostal;

        return $new;
    }

    /**
     * @return string
     */
    public function getDatoAdicional()
    {
        return $this->datoAdicional;
    }

    /**
     * @param string $datoAdicional
     * @return Domicilio
     */
    public function withDatoAdicional($datoAdicional)
    {
        $new = clone $this;
        $new->datoAdicional = $datoAdicional;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescripcionProvincia()
    {
        return $this->descripcionProvincia;
    }

    /**
     * @param string $descripcionProvincia
     * @return Domicilio
     */
    public function withDescripcionProvincia($descripcionProvincia)
    {
        $new = clone $this;
        $new->descripcionProvincia = $descripcionProvincia;

        return $new;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     * @return Domicilio
     */
    public function withDireccion($direccion)
    {
        $new = clone $this;
        $new->direccion = $direccion;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * @param int $idProvincia
     * @return Domicilio
     */
    public function withIdProvincia($idProvincia)
    {
        $new = clone $this;
        $new->idProvincia = $idProvincia;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param string $localidad
     * @return Domicilio
     */
    public function withLocalidad($localidad)
    {
        $new = clone $this;
        $new->localidad = $localidad;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoDatoAdicional()
    {
        return $this->tipoDatoAdicional;
    }

    /**
     * @param string $tipoDatoAdicional
     * @return Domicilio
     */
    public function withTipoDatoAdicional($tipoDatoAdicional)
    {
        $new = clone $this;
        $new->tipoDatoAdicional = $tipoDatoAdicional;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoDomicilio()
    {
        return $this->tipoDomicilio;
    }

    /**
     * @param string $tipoDomicilio
     * @return Domicilio
     */
    public function withTipoDomicilio($tipoDomicilio)
    {
        $new = clone $this;
        $new->tipoDomicilio = $tipoDomicilio;

        return $new;
    }


}

