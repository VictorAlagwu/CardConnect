<?php

namespace Victor\CardConnect\Responses;

use Victor\CardConnect\Responses\Traits\ChecksSuccess;
use Victor\CardConnect\Responses\Traits\ConvertsNumbers;

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
