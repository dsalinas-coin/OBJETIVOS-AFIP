<?php

namespace AfipBundle\Soap\Padron\Type;

class ErrorConstancia
{

    /**
     * @var string
     */
    private $apellido = null;

    /**
     * @var string
     */
    private $error = null;

    /**
     * @var int
     */
    private $idPersona = null;

    /**
     * @var string
     */
    private $nombre = null;

    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     * @return ErrorConstancia
     */
    public function withApellido($apellido)
    {
        $new = clone $this;
        $new->apellido = $apellido;

        return $new;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return ErrorConstancia
     */
    public function withError($error)
    {
        $new = clone $this;
        $new->error = $error;

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
     * @return ErrorConstancia
     */
    public function withIdPersona($idPersona)
    {
        $new = clone $this;
        $new->idPersona = $idPersona;

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
     * @return ErrorConstancia
     */
    public function withNombre($nombre)
    {
        $new = clone $this;
        $new->nombre = $nombre;

        return $new;
    }


}

