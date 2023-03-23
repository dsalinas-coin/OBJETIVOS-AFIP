<?php

namespace AfipBundle\Soap\Padron\Type;

class Caracterizacion
{

    /**
     * @var string
     */
    private $descripcionCaracterizacion = null;

    /**
     * @var int
     */
    private $idCaracterizacion = null;

    /**
     * @var int
     */
    private $periodo = null;

    /**
     * @return string
     */
    public function getDescripcionCaracterizacion()
    {
        return $this->descripcionCaracterizacion;
    }

    /**
     * @param string $descripcionCaracterizacion
     * @return Caracterizacion
     */
    public function withDescripcionCaracterizacion($descripcionCaracterizacion)
    {
        $new = clone $this;
        $new->descripcionCaracterizacion = $descripcionCaracterizacion;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdCaracterizacion()
    {
        return $this->idCaracterizacion;
    }

    /**
     * @param int $idCaracterizacion
     * @return Caracterizacion
     */
    public function withIdCaracterizacion($idCaracterizacion)
    {
        $new = clone $this;
        $new->idCaracterizacion = $idCaracterizacion;

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
     * @return Caracterizacion
     */
    public function withPeriodo($periodo)
    {
        $new = clone $this;
        $new->periodo = $periodo;

        return $new;
    }


}

