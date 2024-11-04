<?php

namespace Victor\CardConnect\Responses;

class AuthorizationResponse extends Response
{
    protected $_numericFields = [
        'amount',
    ];
}
