<?php

namespace AfipBundle\Soap\Padron\Type;

class Dependencia
{

    /**
     * @var string
     */
    private $codPostal = null;

    /**
     * @var string
     */
    private $descripcionDependencia = null;

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
    private $idDependencia = null;

    /**
     * @var int
     */
    private $idProvincia = null;

    /**
     * @var string
     */
    private $localidad = null;

    /**
     * @return string
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * @param string $codPostal
     * @return Dependencia
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
    public function getDescripcionDependencia()
    {
        return $this->descripcionDependencia;
    }

    /**
     * @param string $descripcionDependencia
     * @return Dependencia
     */
    public function withDescripcionDependencia($descripcionDependencia)
    {
        $new = clone $this;
        $new->descripcionDependencia = $descripcionDependencia;

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
     * @return Dependencia
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
     * @return Dependencia
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
    public function getIdDependencia()
    {
        return $this->idDependencia;
    }

    /**
     * @param int $idDependencia
     * @return Dependencia
     */
    public function withIdDependencia($idDependencia)
    {
        $new = clone $this;
        $new->idDependencia = $idDependencia;

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
     * @return Dependencia
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
     * @return Dependencia
     */
    public function withLocalidad($localidad)
    {
        $new = clone $this;
        $new->localidad = $localidad;

        return $new;
    }


}

