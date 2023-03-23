<?php

namespace AfipBundle\Soap\Padron\Type;

class Regimen
{

    /**
     * @var string
     */
    private $descripcionRegimen = null;

    /**
     * @var int
     */
    private $idImpuesto = null;

    /**
     * @var int
     */
    private $idRegimen = null;

    /**
     * @var int
     */
    private $periodo = null;

    /**
     * @var string
     */
    private $tipoRegimen = null;

    /**
     * @return string
     */
    public function getDescripcionRegimen()
    {
        return $this->descripcionRegimen;
    }

    /**
     * @param string $descripcionRegimen
     * @return Regimen
     */
    public function withDescripcionRegimen($descripcionRegimen)
    {
        $new = clone $this;
        $new->descripcionRegimen = $descripcionRegimen;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdImpuesto()
    {
        return $this->idImpuesto;
    }

    /**
     * @param int $idImpuesto
     * @return Regimen
     */
    public function withIdImpuesto($idImpuesto)
    {
        $new = clone $this;
        $new->idImpuesto = $idImpuesto;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdRegimen()
    {
        return $this->idRegimen;
    }

    /**
     * @param int $idRegimen
     * @return Regimen
     */
    public function withIdRegimen($idRegimen)
    {
        $new = clone $this;
        $new->idRegimen = $idRegimen;

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
     * @return Regimen
     */
    public function withPeriodo($periodo)
    {
        $new = clone $this;
        $new->periodo = $periodo;

        return $new;
    }

    /**
     * @return string
     */
    public function getTipoRegimen()
    {
        return $this->tipoRegimen;
    }

    /**
     * @param string $tipoRegimen
     * @return Regimen
     */
    public function withTipoRegimen($tipoRegimen)
    {
        $new = clone $this;
        $new->tipoRegimen = $tipoRegimen;

        return $new;
    }


}

