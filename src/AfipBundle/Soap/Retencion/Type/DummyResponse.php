<?php

namespace AfipBundle\Soap\Retencion\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DummyResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $appserver = null;

    /**
     * @var string
     */
    private $authserver = null;

    /**
     * @var string
     */
    private $dbserver = null;

    /**
     * @return string
     */
    public function getAppserver()
    {
        return $this->appserver;
    }

    /**
     * @param string $appserver
     * @return DummyResponse
     */
    public function withAppserver($appserver)
    {
        $new = clone $this;
        $new->appserver = $appserver;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthserver()
    {
        return $this->authserver;
    }

    /**
     * @param string $authserver
     * @return DummyResponse
     */
    public function withAuthserver($authserver)
    {
        $new = clone $this;
        $new->authserver = $authserver;

        return $new;
    }

    /**
     * @return string
     */
    public function getDbserver()
    {
        return $this->dbserver;
    }

    /**
     * @param string $dbserver
     * @return DummyResponse
     */
    public function withDbserver($dbserver)
    {
        $new = clone $this;
        $new->dbserver = $dbserver;

        return $new;
    }


}

