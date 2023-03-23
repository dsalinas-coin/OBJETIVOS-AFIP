<?php

namespace AfipBundle\Soap\Padron\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DummyResponse implements ResultInterface
{

    /**
     * @var \AfipBundle\Soap\Padron\Type\DummyReturn
     */
    private $return = null;

    /**
     * @return \AfipBundle\Soap\Padron\Type\DummyReturn
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \AfipBundle\Soap\Padron\Type\DummyReturn $return
     * @return DummyResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

