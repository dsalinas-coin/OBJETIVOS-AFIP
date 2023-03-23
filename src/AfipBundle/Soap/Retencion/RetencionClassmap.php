<?php

namespace AfipBundle\Soap\Retencion;

use AfipBundle\Soap\Retencion\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class RetencionClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('HeaderInfo', Type\HeaderInfo::class),
            new ClassMap('dummy', Type\Dummy::class),
            new ClassMap('dummyResponse', Type\DummyResponse::class),
            new ClassMap('emitir', Type\Emitir::class),
            new ClassMap('certificado', Type\Certificado::class),
            new ClassMap('emitirResponse', Type\EmitirResponse::class),
            new ClassMap('certificadoAnulacion', Type\CertificadoAnulacion::class),
            new ClassMap('anular', Type\Anular::class),
            new ClassMap('anularResponse', Type\AnularResponse::class),
            new ClassMap('Exception', Type\Exception::class),
        ]);
    }


}

