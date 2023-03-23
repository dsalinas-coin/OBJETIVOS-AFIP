<?php

namespace AfipBundle\Soap\Padron\Type;

class Actividad
{

    /**
     * @var string
     */
    private $descripcionActividad = null;

    /**
     * @var int
     */
    private $idActividad = null;

    /**
     * @var int
     */
    private $nomenclador = null;

    /**
     * @var int
     */
    private $orden = null;

    /**
     * @var int
     */
    private $periodo = null;

    /**
     * @return string
     */
    public function getDescripcionActividad()
    {
        return $this->descripcionActividad;
    }

    /**
     * @param string $descripcionActividad
     * @return Actividad
     */
    public function withDescripcionActividad($descripcionActividad)
    {
        $new = clone $this;
        $new->descripcionActividad = $descripcionActividad;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * @param int $idActividad
     * @return Actividad
     */
    public function withIdActividad($idActividad)
    {
        $new = clone $this;
        $new->idActividad = $idActividad;

        return $new;
    }

    /**
     * @return int
     */
    public function getNomenclador()
    {
        return $this->nomenclador;
    }

    /**
     * @param int $nomenclador
     * @return Actividad
     */
    public function withNomenclador($nomenclador)
    {
        $new = clone $this;
        $new->nomenclador = $nomenclador;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * @param int $orden
     * @return Actividad
     */
    public function withOrden($orden)
    {
        $new = clone $this;
        $new->orden = $orden;

        return $new;
    }

    /**
     * @return int
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * @param int $periodo
     * @return Actividad
     */
    public function withPeriodo($periodo)
    {
        $new = clone $this;
        $new->periodo = $periodo;

        return $new;
    }


}

