<?php

namespace VictorAlagwu\CardConnect\Responses;

class VoidResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
