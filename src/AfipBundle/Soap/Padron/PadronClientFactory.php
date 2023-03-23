<?php

namespace AfipBundle\Soap\Padron;

use AfipBundle\Soap\Padron\PadronClient;
use AfipBundle\Soap\Padron\PadronClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class PadronClientFactory
{

    public static function factory(string $wsdl) : \AfipBundle\Soap\Padron\PadronClient
    {
        $clientFactory = new PhproClientFactory(PadronClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(PadronClassmap::getCollection());

        return $clientBuilder->build();
    }


}

