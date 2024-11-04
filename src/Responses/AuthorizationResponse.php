<?php

namespace VictorAlagwu\CardConnect\Responses;

class AuthorizationResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
