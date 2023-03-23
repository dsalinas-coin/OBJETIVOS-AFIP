<?php

namespace AfipBundle\Repository;


use AfipBundle\Soap\Retencion as Retencion;

class RetencionRepository extends BaseRepository
{

    const factory = '\AfipBundle\Soap\Retencion\RetencionClientFactory';

    public function __construct($urls, $serializer, $logger, $translator)
    {
        parent::__construct($urls, $serializer, $logger, $translator,self::factory);
    }
    public function addRetencion($retencion){
        $request = new Retencion\Type\Emitir($this->authInfo['wsaa_token'], $this->authInfo['wsaa_sign'], "33714189919",$retencion);
        $client = $this->client;
        /** @var Retencion\RetencionClient $client */
        $response = $client->emitir($request);
    }


}
