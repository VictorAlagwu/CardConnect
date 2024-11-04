<?php

namespace VictorAlagwu\CardConnect\Exceptions;

class CardConnectException extends \Exception
{
    public $response;

    public function __construct($response)
    {
        $this->response = $response;
    }
}
