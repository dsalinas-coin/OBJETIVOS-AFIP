<?php

namespace AfipBundle\Soap\Padron\Type;

class Impuesto
{

    /**
     * @var string
     */
    private $descripcionImpuesto = null;

    /**
     * @var int
     */
    private $idImpuesto = null;

    /**
     * @var int
     */
    private $periodo = null;

    /**
     * @return string
     */
    public function getDescripcionImpuesto()
    {
        return $this->descripcionImpuesto;
    }

    /**
     * @param string $descripcionImpuesto
     * @return Impuesto
     */
    public function withDescripcionImpuesto($descripcionImpuesto)
    {
        $new = clone $this;
        $new->descripcionImpuesto = $descripcionImpuesto;

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
     * @return Impuesto
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
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * @param int $periodo
     * @return Impuesto
     */
    public function withPeriodo($periodo)
    {
        $new = clone $this;
        $new->periodo = $periodo;

        return $new;
    }


}

