<?php

namespace AfipBundle\Soap\Retencion\Type;

class CertificadoAnulacion
{

    /**
     * @var int
     */
    private $version = null;

    /**
     * @var string
     */
    private $codigoTrazabilidad = null;

    /**
     * @var int
     */
    private $impuesto = null;

    /**
     * @var string
     */
    private $numeroCertificado = null;

    /**
     * @var int
     */
    private $motivoAnulacion = null;

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return CertificadoAnulacion
     */
    public function withVersion($version)
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodigoTrazabilidad()
    {
        return $this->codigoTrazabilidad;
    }

    /**
     * @param string $codigoTrazabilidad
     * @return CertificadoAnulacion
     */
    public function withCodigoTrazabilidad($codigoTrazabilidad)
    {
        $new = clone $this;
        $new->codigoTrazabilidad = $codigoTrazabilidad;

        return $new;
    }

    /**
     * @return int
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * @param int $impuesto
     * @return CertificadoAnulacion
     */
    public function withImpuesto($impuesto)
    {
        $new = clone $this;
        $new->impuesto = $impuesto;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroCertificado()
    {
        return $this->numeroCertificado;
    }

    /**
     * @param string $numeroCertificado
     * @return CertificadoAnulacion
     */
    public function withNumeroCertificado($numeroCertificado)
    {
        $new = clone $this;
        $new->numeroCertificado = $numeroCertificado;

        return $new;
    }

    /**
     * @return int
     */
    public function getMotivoAnulacion()
    {
        return $this->motivoAnulacion;
    }

    /**
     * @param int $motivoAnulacion
     * @return CertificadoAnulacion
     */
    public function withMotivoAnulacion($motivoAnulacion)
    {
        $new = clone $this;
        $new->motivoAnulacion = $motivoAnulacion;

        return $new;
    }


}

