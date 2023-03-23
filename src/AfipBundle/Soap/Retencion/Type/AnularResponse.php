<?php

namespace AfipBundle\Soap\Retencion\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AnularResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $certificadoNro = null;

    /**
     * @var string
     */
    private $codigoSeguridad = null;

    /**
     * @return string
     */
    public function getCertificadoNro()
    {
        return $this->certificadoNro;
    }

    /**
     * @param string $certificadoNro
     * @return AnularResponse
     */
    public function withCertificadoNro($certificadoNro)
    {
        $new = clone $this;
        $new->certificadoNro = $certificadoNro;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodigoSeguridad()
    {
        return $this->codigoSeguridad;
    }

    /**
     * @param string $codigoSeguridad
     * @return AnularResponse
     */
    public function withCodigoSeguridad($codigoSeguridad)
    {
        $new = clone $this;
        $new->codigoSeguridad = $codigoSeguridad;

        return $new;
    }


}

