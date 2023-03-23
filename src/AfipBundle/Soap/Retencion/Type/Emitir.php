<?php

namespace AfipBundle\Soap\Retencion\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Emitir implements RequestInterface
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
     * @var \AfipBundle\Soap\Retencion\Type\Certificado
     */
    private $certificado = null;

    /**
     * Emitir constructor.
     * @param string $token
     * @param string $sign
     * @param int $cuitAgente
     * @param Certificado $certificado
     */
    public function __construct(string $token, string $sign, int $cuitAgente, Certificado $certificado)
    {
        $this->token = $token;
        $this->sign = $sign;
        $this->cuitAgente = $cuitAgente;
        $this->certificado = $certificado;
    }


    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return Emitir
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
     * @return Emitir
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
     * @return Emitir
     */
    public function withCuitAgente($cuitAgente)
    {
        $new = clone $this;
        $new->cuitAgente = $cuitAgente;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Retencion\Type\Certificado
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * @param \AfipBundle\Soap\Retencion\Type\Certificado $certificado
     * @return Emitir
     */
    public function withCertificado($certificado)
    {
        $new = clone $this;
        $new->certificado = $certificado;

        return $new;
    }


}

