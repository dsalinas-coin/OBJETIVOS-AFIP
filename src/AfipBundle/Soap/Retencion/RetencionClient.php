<?php

namespace AfipBundle\Soap\Retencion;

use AfipBundle\Soap\Retencion\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class RetencionClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\Dummy $parameters
     * @return ResultInterface|Type\DummyResponse
     * @throws SoapException
     */
    public function dummy(\AfipBundle\Soap\Retencion\Type\Dummy $parameters) : \AfipBundle\Soap\Retencion\Type\DummyResponse
    {
        return $this->call('dummy', $parameters);
    }

    /**
     * @param RequestInterface|Type\Emitir $parameters
     * @return ResultInterface|Type\EmitirResponse
     * @throws SoapException
     */
    public function emitir(\AfipBundle\Soap\Retencion\Type\Emitir $parameters) : \AfipBundle\Soap\Retencion\Type\EmitirResponse
    {
        return $this->call('emitir', $parameters);
    }

    /**
     * @param RequestInterface|Type\Anular $parameters
     * @return ResultInterface|Type\AnularResponse
     * @throws SoapException
     */
    public function anular(\AfipBundle\Soap\Retencion\Type\Anular $parameters) : \AfipBundle\Soap\Retencion\Type\AnularResponse
    {
        return $this->call('anular', $parameters);
    }


}

