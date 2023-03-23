<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('https://awshomo.afip.gov.ar/sr-padron/webservices/personaServiceA5?WSDL')
    ->setTypeDestination('src/AfipBundle/Soap/Padron/Type')
    ->setTypeNamespace('AfipBundle\\Soap\\Padron\Type')
    ->setClientDestination('src/AfipBundle/Soap/Padron')
    ->setClientName('PadronClient')
    ->setClientNamespace('AfipBundle\\Soap\\Padron')
    ->setClassMapDestination('src/AfipBundle/Soap/Padron')
    ->setClassMapName('PadronClassmap')
    ->setClassMapNamespace('AfipBundle\\Soap\\Padron')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ]),
            '/^Get.*(?<!Response$)$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/Response$/i'
        )
    )
;
