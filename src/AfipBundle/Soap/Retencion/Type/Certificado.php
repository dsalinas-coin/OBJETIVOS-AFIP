<?php

namespace AfipBundle\Soap\Retencion\Type;

class Certificado
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
     * @var int
     */
    private $regimen = null;

    /**
     * @var \DateTime
     */
    private $fechaRetencion = null;

    /**
     * @var int
     */
    private $condicion = null;

    /**
     * @var bool
     */
    private $imposibilidadRetencion = null;

    /**
     * @var string
     */
    private $motivoNoRetencion = null;

    /**
     * @var float
     */
    private $importeRetencion = null;

    /**
     * @var float
     */
    private $importeBaseCalculo = null;

    /**
     * @var bool
     */
    private $regimenExclusion = null;

    /**
     * @var float
     */
    private $porcentajeExclusion = null;

    /**
     * @var \DateTime
     */
    private $fechaPublicacion = null;

    /**
     * @var int
     */
    private $tipoComprobante = null;

    /**
     * @var \DateTime
     */
    private $fechaComprobante = null;

    /**
     * @var string
     */
    private $numeroComprobante = null;

    /**
     * @var string
     */
    private $coe = null;

    /**
     * @var string
     */
    private $coeOriginal = null;

    /**
     * @var string
     */
    private $cae = null;

    /**
     * @var float
     */
    private $importeComprobante = null;

    /**
     * @var string
     */
    private $motivoEmisionNotaCredito = null;

    /**
     * @var int
     */
    private $cuitRetenido = null;

    /**
     * @var string
     */
    private $numeroCertificadoOriginal = null;

    /**
     * @var \DateTime
     */
    private $fechaRetencionCertificadoOriginal = null;

    /**
     * @var float
     */
    private $importeCertificadoOriginal = null;

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
     * @return Certificado
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
     * @return Certificado
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
     * @return Certificado
     */
    public function withImpuesto($impuesto)
    {
        $new = clone $this;
        $new->impuesto = $impuesto;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * @param int $regimen
     * @return Certificado
     */
    public function withRegimen($regimen)
    {
        $new = clone $this;
        $new->regimen = $regimen;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaRetencion()
    {
        return $this->fechaRetencion;
    }

    /**
     * @param \DateTime $fechaRetencion
     * @return Certificado
     */
    public function withFechaRetencion($fechaRetencion)
    {
        $new = clone $this;
        $new->fechaRetencion = $fechaRetencion;

        return $new;
    }

    /**
     * @return int
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * @param int $condicion
     * @return Certificado
     */
    public function withCondicion($condicion)
    {
        $new = clone $this;
        $new->condicion = $condicion;

        return $new;
    }

    /**
     * @return bool
     */
    public function getImposibilidadRetencion()
    {
        return $this->imposibilidadRetencion;
    }

    /**
     * @param bool $imposibilidadRetencion
     * @return Certificado
     */
    public function withImposibilidadRetencion($imposibilidadRetencion)
    {
        $new = clone $this;
        $new->imposibilidadRetencion = $imposibilidadRetencion;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotivoNoRetencion()
    {
        return $this->motivoNoRetencion;
    }

    /**
     * @param string $motivoNoRetencion
     * @return Certificado
     */
    public function withMotivoNoRetencion($motivoNoRetencion)
    {
        $new = clone $this;
        $new->motivoNoRetencion = $motivoNoRetencion;

        return $new;
    }

    /**
     * @return float
     */
    public function getImporteRetencion()
    {
        return $this->importeRetencion;
    }

    /**
     * @param float $importeRetencion
     * @return Certificado
     */
    public function withImporteRetencion($importeRetencion)
    {
        $new = clone $this;
        $new->importeRetencion = $importeRetencion;

        return $new;
    }

    /**
     * @return float
     */
    public function getImporteBaseCalculo()
    {
        return $this->importeBaseCalculo;
    }

    /**
     * @param float $importeBaseCalculo
     * @return Certificado
     */
    public function withImporteBaseCalculo($importeBaseCalculo)
    {
        $new = clone $this;
        $new->importeBaseCalculo = $importeBaseCalculo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRegimenExclusion()
    {
        return $this->regimenExclusion;
    }

    /**
     * @param bool $regimenExclusion
     * @return Certificado
     */
    public function withRegimenExclusion($regimenExclusion)
    {
        $new = clone $this;
        $new->regimenExclusion = $regimenExclusion;

        return $new;
    }

    /**
     * @return float
     */
    public function getPorcentajeExclusion()
    {
        return $this->porcentajeExclusion;
    }

    /**
     * @param float $porcentajeExclusion
     * @return Certificado
     */
    public function withPorcentajeExclusion($porcentajeExclusion)
    {
        $new = clone $this;
        $new->porcentajeExclusion = $porcentajeExclusion;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    /**
     * @param \DateTime $fechaPublicacion
     * @return Certificado
     */
    public function withFechaPublicacion($fechaPublicacion)
    {
        $new = clone $this;
        $new->fechaPublicacion = $fechaPublicacion;

        return $new;
    }

    /**
     * @return int
     */
    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }

    /**
     * @param int $tipoComprobante
     * @return Certificado
     */
    public function withTipoComprobante($tipoComprobante)
    {
        $new = clone $this;
        $new->tipoComprobante = $tipoComprobante;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaComprobante()
    {
        return $this->fechaComprobante;
    }

    /**
     * @param \DateTime $fechaComprobante
     * @return Certificado
     */
    public function withFechaComprobante($fechaComprobante)
    {
        $new = clone $this;
        $new->fechaComprobante = $fechaComprobante;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroComprobante()
    {
        return $this->numeroComprobante;
    }

    /**
     * @param string $numeroComprobante
     * @return Certificado
     */
    public function withNumeroComprobante($numeroComprobante)
    {
        $new = clone $this;
        $new->numeroComprobante = $numeroComprobante;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoe()
    {
        return $this->coe;
    }

    /**
     * @param string $coe
     * @return Certificado
     */
    public function withCoe($coe)
    {
        $new = clone $this;
        $new->coe = $coe;

        return $new;
    }

    /**
     * @return string
     */
    public function getCoeOriginal()
    {
        return $this->coeOriginal;
    }

    /**
     * @param string $coeOriginal
     * @return Certificado
     */
    public function withCoeOriginal($coeOriginal)
    {
        $new = clone $this;
        $new->coeOriginal = $coeOriginal;

        return $new;
    }

    /**
     * @return string
     */
    public function getCae()
    {
        return $this->cae;
    }

    /**
     * @param string $cae
     * @return Certificado
     */
    public function withCae($cae)
    {
        $new = clone $this;
        $new->cae = $cae;

        return $new;
    }

    /**
     * @return float
     */
    public function getImporteComprobante()
    {
        return $this->importeComprobante;
    }

    /**
     * @param float $importeComprobante
     * @return Certificado
     */
    public function withImporteComprobante($importeComprobante)
    {
        $new = clone $this;
        $new->importeComprobante = $importeComprobante;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotivoEmisionNotaCredito()
    {
        return $this->motivoEmisionNotaCredito;
    }

    /**
     * @param string $motivoEmisionNotaCredito
     * @return Certificado
     */
    public function withMotivoEmisionNotaCredito($motivoEmisionNotaCredito)
    {
        $new = clone $this;
        $new->motivoEmisionNotaCredito = $motivoEmisionNotaCredito;

        return $new;
    }

    /**
     * @return int
     */
    public function getCuitRetenido()
    {
        return $this->cuitRetenido;
    }

    /**
     * @param int $cuitRetenido
     * @return Certificado
     */
    public function withCuitRetenido($cuitRetenido)
    {
        $new = clone $this;
        $new->cuitRetenido = $cuitRetenido;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroCertificadoOriginal()
    {
        return $this->numeroCertificadoOriginal;
    }

    /**
     * @param string $numeroCertificadoOriginal
     * @return Certificado
     */
    public function withNumeroCertificadoOriginal($numeroCertificadoOriginal)
    {
        $new = clone $this;
        $new->numeroCertificadoOriginal = $numeroCertificadoOriginal;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFechaRetencionCertificadoOriginal()
    {
        return $this->fechaRetencionCertificadoOriginal;
    }

    /**
     * @param \DateTime $fechaRetencionCertificadoOriginal
     * @return Certificado
     */
    public function withFechaRetencionCertificadoOriginal($fechaRetencionCertificadoOriginal)
    {
        $new = clone $this;
        $new->fechaRetencionCertificadoOriginal = $fechaRetencionCertificadoOriginal;

        return $new;
    }

    /**
     * @return float
     */
    public function getImporteCertificadoOriginal()
    {
        return $this->importeCertificadoOriginal;
    }

    /**
     * @param float $importeCertificadoOriginal
     * @return Certificado
     */
    public function withImporteCertificadoOriginal($importeCertificadoOriginal)
    {
        $new = clone $this;
        $new->importeCertificadoOriginal = $importeCertificadoOriginal;

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
     * @return Certificado
     */
    public function withMotivoAnulacion($motivoAnulacion)
    {
        $new = clone $this;
        $new->motivoAnulacion = $motivoAnulacion;

        return $new;
    }


}

