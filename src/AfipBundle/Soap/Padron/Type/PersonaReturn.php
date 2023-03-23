<?php

namespace AfipBundle\Soap\Padron\Type;

class PersonaReturn
{

    /**
     * @var \AfipBundle\Soap\Padron\Type\DatosGenerales
     */
    private $datosGenerales = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\DatosMonotributo
     */
    private $datosMonotributo = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\DatosRegimenGeneral
     */
    private $datosRegimenGeneral = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\ErrorConstancia
     */
    private $errorConstancia = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\ErrorMonotributo
     */
    private $errorMonotributo = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\ErrorRegimenGeneral
     */
    private $errorRegimenGeneral = null;

    /**
     * @var \AfipBundle\Soap\Padron\Type\Metadata
     */
    private $metadata = null;

    /**
     * @return \AfipBundle\Soap\Padron\Type\DatosGenerales
     */
    public function getDatosGenerales()
    {
        return $this->datosGenerales;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\DatosGenerales $datosGenerales
     * @return PersonaReturn
     */
    public function withDatosGenerales($datosGenerales)
    {
        $new = clone $this;
        $new->datosGenerales = $datosGenerales;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\DatosMonotributo
     */
    public function getDatosMonotributo()
    {
        return $this->datosMonotributo;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\DatosMonotributo $datosMonotributo
     * @return PersonaReturn
     */
    public function withDatosMonotributo($datosMonotributo)
    {
        $new = clone $this;
        $new->datosMonotributo = $datosMonotributo;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\DatosRegimenGeneral
     */
    public function getDatosRegimenGeneral()
    {
        return $this->datosRegimenGeneral;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\DatosRegimenGeneral $datosRegimenGeneral
     * @return PersonaReturn
     */
    public function withDatosRegimenGeneral($datosRegimenGeneral)
    {
        $new = clone $this;
        $new->datosRegimenGeneral = $datosRegimenGeneral;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\ErrorConstancia
     */
    public function getErrorConstancia()
    {
        return $this->errorConstancia;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\ErrorConstancia $errorConstancia
     * @return PersonaReturn
     */
    public function withErrorConstancia($errorConstancia)
    {
        $new = clone $this;
        $new->errorConstancia = $errorConstancia;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\ErrorMonotributo
     */
    public function getErrorMonotributo()
    {
        return $this->errorMonotributo;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\ErrorMonotributo $errorMonotributo
     * @return PersonaReturn
     */
    public function withErrorMonotributo($errorMonotributo)
    {
        $new = clone $this;
        $new->errorMonotributo = $errorMonotributo;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\ErrorRegimenGeneral
     */
    public function getErrorRegimenGeneral()
    {
        return $this->errorRegimenGeneral;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\ErrorRegimenGeneral $errorRegimenGeneral
     * @return PersonaReturn
     */
    public function withErrorRegimenGeneral($errorRegimenGeneral)
    {
        $new = clone $this;
        $new->errorRegimenGeneral = $errorRegimenGeneral;

        return $new;
    }

    /**
     * @return \AfipBundle\Soap\Padron\Type\Metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\Metadata $metadata
     * @return PersonaReturn
     */
    public function withMetadata($metadata)
    {
        $new = clone $this;
        $new->metadata = $metadata;

        return $new;
    }


}

