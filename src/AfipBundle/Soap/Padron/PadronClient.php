<?php

namespace AfipBundle\Soap\Padron;

use AfipBundle\Soap\Padron\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class PadronClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetPersona $parameters
     * @return ResultInterface|Type\GetPersonaResponse
     * @throws SoapException
     */
    public function getPersona(\AfipBundle\Soap\Padron\Type\GetPersona $parameters) : \AfipBundle\Soap\Padron\Type\GetPersonaResponse
    {
        return $this->call('getPersona', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPersonaList $parameters
     * @return ResultInterface|Type\GetPersonaListResponse
     * @throws SoapException
     */
    public function getPersonaList(\AfipBundle\Soap\Padron\Type\GetPersonaList $parameters) : \AfipBundle\Soap\Padron\Type\GetPersonaListResponse
    {
        return $this->call('getPersonaList', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPersonaV2 $parameters
     * @return ResultInterface|Type\GetPersonaV2Response
     * @throws SoapException
     */
    public function getPersona_v2(\AfipBundle\Soap\Padron\Type\GetPersonaV2 $parameters) : \AfipBundle\Soap\Padron\Type\GetPersonaV2Response
    {
        return $this->call('getPersona_v2', $parameters);
    }

    /**
     * @param RequestInterface|Type\Dummy $parameters
     * @return ResultInterface|Type\DummyResponse
     * @throws SoapException
     */
    public function dummy(\AfipBundle\Soap\Padron\Type\Dummy $parameters) : \AfipBundle\Soap\Padron\Type\DummyResponse
    {
        return $this->call('dummy', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetPersonaListV2 $parameters
     * @return ResultInterface|Type\GetPersonaListV2Response
     * @throws SoapException
     */
    public function getPersonaList_v2(\AfipBundle\Soap\Padron\Type\GetPersonaListV2 $parameters) : \AfipBundle\Soap\Padron\Type\GetPersonaListV2Response
    {
        return $this->call('getPersonaList_v2', $parameters);
    }


}

