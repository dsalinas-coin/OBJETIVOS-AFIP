<?php

namespace AfipBundle\Soap\Padron\Type;

class ErrorRegimenGeneral
{

    /**
     * @var string
     */
    private $error = null;

    /**
     * @var string
     */
    private $mensaje = null;

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return ErrorRegimenGeneral
     */
    public function withError($error)
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @param string $mensaje
     * @return ErrorRegimenGeneral
     */
    public function withMensaje($mensaje)
    {
        $new = clone $this;
        $new->mensaje = $mensaje;

        return $new;
    }


}

