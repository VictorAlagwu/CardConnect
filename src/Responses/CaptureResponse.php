<?php

namespace VictorAlagwu\CardConnect\Responses;

class CaptureResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
