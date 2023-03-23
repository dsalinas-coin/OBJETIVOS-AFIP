<?php

namespace AfipBundle\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonaListV2Response implements ResultInterface
{

    /**
     * @var \AfipBundle\Soap\Padron\Type\PersonaListReturn
     */
    private $personaListReturn = null;

    /**
     * @return \AfipBundle\Soap\Padron\Type\PersonaListReturn
     */
    public function getPersonaListReturn()
    {
        return $this->personaListReturn;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\PersonaListReturn $personaListReturn
     * @return GetPersonaListV2Response
     */
    public function withPersonaListReturn($personaListReturn)
    {
        $new = clone $this;
        $new->personaListReturn = $personaListReturn;

        return $new;
    }


}

