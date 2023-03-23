<?php

namespace AfipBundle\Soap\Padron\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonaListV2 implements RequestInterface
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
    private $cuitRepresentada = null;

    /**
     * @var array
     */
    private $idPersona = null;

    /**
     * Constructor
     *
     * @var string $token
     * @var string $sign
     * @var int $cuitRepresentada
     * @var array $idPersona
     */
    public function __construct($token, $sign, $cuitRepresentada, $idPersonas)
    {
        $this->token = $token;
        $this->sign = $sign;
        $this->cuitRepresentada = $cuitRepresentada;
        $this->idPersona = $idPersonas;
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
     * @return GetPersonaListV2
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
     * @return GetPersonaListV2
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
    public function getCuitRepresentada()
    {
        return $this->cuitRepresentada;
    }

    /**
     * @param int $cuitRepresentada
     * @return GetPersonaListV2
     */
    public function withCuitRepresentada($cuitRepresentada)
    {
        $new = clone $this;
        $new->cuitRepresentada = $cuitRepresentada;

        return $new;
    }

    /**
     * @return array
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param array $idPersona
     * @return GetPersonaListV2
     */
    public function withIdPersona($idPersona)
    {
        $new = clone $this;
        $new->idPersona = $idPersona;

        return $new;
    }


}

