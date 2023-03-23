<?php

namespace AfipBundle\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonaListResponse implements ResultInterface
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
     * @return GetPersonaListResponse
     */
    public function withPersonaListReturn($personaListReturn)
    {
        $new = clone $this;
        $new->personaListReturn = $personaListReturn;

        return $new;
    }


}

