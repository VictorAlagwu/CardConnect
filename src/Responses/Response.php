<?php

namespace VictorAlagwu\CardConnect\Responses;

use VictorAlagwu\CardConnect\Responses\Traits\ChecksSuccess;
use VictorAlagwu\CardConnect\Responses\Traits\ConvertsNumbers;

class Response extends Fluent
{
    use ChecksSuccess;
    use ConvertsNumbers;

    public function __construct(array $res)
    {
        parent::__construct($res);
        $this->convertNumbers();
    }
}
