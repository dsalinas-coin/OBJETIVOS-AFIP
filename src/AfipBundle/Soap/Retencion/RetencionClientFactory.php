<?php

namespace AfipBundle\Soap\Retencion;

use AfipBundle\Soap\Retencion\RetencionClient;
use AfipBundle\Soap\Retencion\RetencionClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class RetencionClientFactory
{

    public static function factory(string $wsdl) : \AfipBundle\Soap\Retencion\RetencionClient
    {
        $clientFactory = new PhproClientFactory(RetencionClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(RetencionClassmap::getCollection());

        return $clientBuilder->build();
    }


}

