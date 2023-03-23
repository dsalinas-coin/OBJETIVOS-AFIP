<?php

namespace AfipBundle\Soap\Retencion\Type;

class Exception
{

    /**
     * @var string
     */
    private $message = null;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Exception
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }


}

