<?php

namespace AfipBundle\Soap\Padron\Type;

class DummyReturn
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
     * @return DummyReturn
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
     * @return DummyReturn
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
     * @return DummyReturn
     */
    public function withDbserver($dbserver)
    {
        $new = clone $this;
        $new->dbserver = $dbserver;

        return $new;
    }


}

