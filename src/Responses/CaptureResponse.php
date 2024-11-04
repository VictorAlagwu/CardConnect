<?php

namespace Victor\CardConnect\Responses;

class CaptureResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
