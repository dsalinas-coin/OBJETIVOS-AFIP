<?php

namespace AfipBundle\Soap\Retencion\Type;

class HeaderInfo
{

    /**
     * @var string
     */
    private $ambiente = null;

    /**
     * @var \DateTime
     */
    private $fecha = null;

    /**
     * @var string
     */
    private $vCore = null;

    /**
     * @var string
     */
    private $v2005 = null;

    /**
     * @return string
     */
    public function getAmbiente()
    {
        return $this->ambiente;
    }

    /**
     * @param string $ambiente
     * @return HeaderInfo
     */
    public function withAmbiente($ambiente)
    {
        $new = clone $this;
        $new->ambiente = $ambiente;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param \DateTime $fecha
     * @return HeaderInfo
     */
    public function withFecha($fecha)
    {
        $new = clone $this;
        $new->fecha = $fecha;

        return $new;
    }

    /**
     * @return string
     */
    public function getVCore()
    {
        return $this->vCore;
    }

    /**
     * @param string $vCore
     * @return HeaderInfo
     */
    public function withVCore($vCore)
    {
        $new = clone $this;
        $new->vCore = $vCore;

        return $new;
    }

    /**
     * @return string
     */
    public function getV2005()
    {
        return $this->v2005;
    }

    /**
     * @param string $v2005
     * @return HeaderInfo
     */
    public function withV2005($v2005)
    {
        $new = clone $this;
        $new->v2005 = $v2005;

        return $new;
    }


}

