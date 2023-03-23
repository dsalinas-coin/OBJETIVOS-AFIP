<?php

namespace AfipBundle\Soap\Padron;

use AfipBundle\Soap\Padron\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class PadronClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('getPersona', Type\GetPersona::class),
            new ClassMap('getPersonaResponse', Type\GetPersonaResponse::class),
            new ClassMap('personaReturn', Type\PersonaReturn::class),
            new ClassMap('datosGenerales', Type\DatosGenerales::class),
            new ClassMap('caracterizacion', Type\Caracterizacion::class),
            new ClassMap('dependencia', Type\Dependencia::class),
            new ClassMap('domicilio', Type\Domicilio::class),
            new ClassMap('datosMonotributo', Type\DatosMonotributo::class),
            new ClassMap('actividad', Type\Actividad::class),
            new ClassMap('categoria', Type\Categoria::class),
            new ClassMap('relacion', Type\Relacion::class),
            new ClassMap('impuesto', Type\Impuesto::class),
            new ClassMap('datosRegimenGeneral', Type\DatosRegimenGeneral::class),
            new ClassMap('regimen', Type\Regimen::class),
            new ClassMap('errorConstancia', Type\ErrorConstancia::class),
            new ClassMap('errorMonotributo', Type\ErrorMonotributo::class),
            new ClassMap('errorRegimenGeneral', Type\ErrorRegimenGeneral::class),
            new ClassMap('metadata', Type\Metadata::class),
            new ClassMap('getPersonaList', Type\GetPersonaList::class),
            new ClassMap('getPersonaListResponse', Type\GetPersonaListResponse::class),
            new ClassMap('personaListReturn', Type\PersonaListReturn::class),
            new ClassMap('persona', Type\Persona::class),
            new ClassMap('getPersona_v2', Type\GetPersonaV2::class),
            new ClassMap('getPersona_v2Response', Type\GetPersonaV2Response::class),
            new ClassMap('dummy', Type\Dummy::class),
            new ClassMap('dummyResponse', Type\DummyResponse::class),
            new ClassMap('dummyReturn', Type\DummyReturn::class),
            new ClassMap('getPersonaList_v2', Type\GetPersonaListV2::class),
            new ClassMap('getPersonaList_v2Response', Type\GetPersonaListV2Response::class),
            new ClassMap('SRValidationException', Type\SRValidationException::class),
        ]);
    }


}

