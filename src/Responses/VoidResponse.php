<?php

namespace Victor\CardConnect\Responses;

class VoidResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
