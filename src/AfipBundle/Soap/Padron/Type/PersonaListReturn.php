<?php

namespace AfipBundle\Soap\Padron\Type;

class PersonaListReturn
{

    /**
     * @var \AfipBundle\Soap\Padron\Type\Metadata
     */
    private $metadata = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\Persona
     */
    private $persona = null;

    /**
     * @return \AfipBundle\Soap\Padron\Type\Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Metadata $metadata
     * @return PersonaListReturn
     */
    public function withMetadata($metadata)
    {
        $new = clone $this;
        $new->metadata = $metadata;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Persona $persona
     * @return PersonaListReturn
     */
    public function withPersona($persona)
    {
        $new = clone $this;
        $new->persona = $persona;

        return $new;
    }


}

