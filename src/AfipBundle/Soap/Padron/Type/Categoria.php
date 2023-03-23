<?php

namespace AfipBundle\Soap\Padron\Type;

class Categoria
{

    /**
     * @var string
     */
    private $descripcionCategoria = null;

    /**
     * @var int
     */
    private $idCategoria = null;

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
    public function getDescripcionCategoria()
    {
        return $this->descripcionCategoria;
    }

    /**
     * @param string $descripcionCategoria
     * @return Categoria
     */
    public function withDescripcionCategoria($descripcionCategoria)
    {
        $new = clone $this;
        $new->descripcionCategoria = $descripcionCategoria;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param int $idCategoria
     * @return Categoria
     */
    public function withIdCategoria($idCategoria)
    {
        $new = clone $this;
        $new->idCategoria = $idCategoria;

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
     * @return Categoria
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
     * @return Categoria
     */
    public function withPeriodo($periodo)
    {
        $new = clone $this;
        $new->periodo = $periodo;

        return $new;
    }


}

