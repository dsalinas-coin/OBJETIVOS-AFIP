<?php

namespace AfipBundle\Soap\Padron\Type;

class Metadata
{

    /**
     * @var \DateTime
     */
    private $fechaHora = null;

    /**
     * @var string
     */
    private $servidor = null;

    /**
     * @return \DateTime
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * @param \DateTime $fechaHora
     * @return Metadata
     */
    public function withFechaHora($fechaHora)
    {
        $new = clone $this;
        $new->fechaHora = $fechaHora;

        return $new;
    }

    /**
     * @return string
     */
    public function getServidor()
    {
        return $this->servidor;
    }

    /**
     * @param string $servidor
     * @return Metadata
     */
    public function withServidor($servidor)
    {
        $new = clone $this;
        $new->servidor = $servidor;

        return $new;
    }


}

