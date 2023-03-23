<?php

namespace AfipBundle\Soap\Retencion\Type;

class Anular
{

    /**
     * @var string
     */
    private $token = null;

    /**
     * @var string
     */
    private $sign = null;

    /**
     * @var int
     */
    private $cuitAgente = null;

    /**
     * @var \AfipBundle\Soap\Retencion\Type\CertificadoAnulacion
     */
    private $certificadoAnulacion = null;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return Anular
     */
    public function withToken($token)
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param string $sign
     * @return Anular
     */
    public function withSign($sign)
    {
        $new = clone $this;
        $new->sign = $sign;

        return $new;
    }

    /**
     * @return int
     */
    public function getCuitAgente()
    {
        return $this->cuitAgente;
    }

    /**
     * @param int $cuitAgente
     * @return Anular
     */
    public function withCuitAgente($cuitAgente)
    {
        $new = clone $this;
        $new->cuitAgente = $cuitAgente;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Retencion\Type\CertificadoAnulacion
     */
    public function getCertificadoAnulacion()
    {
        return $this->certificadoAnulacion;
    }

    /**
     * @param \AfipBundle\Soap\Retencion\Type\CertificadoAnulacion
     * $certificadoAnulacion
     * @return Anular
     */
    public function withCertificadoAnulacion($certificadoAnulacion)
    {
        $new = clone $this;
        $new->certificadoAnulacion = $certificadoAnulacion;

        return $new;
    }


}

