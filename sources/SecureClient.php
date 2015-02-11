<?php

namespace kolyunya\oauth2\validation;

use kolyunya\oauth2\validation\BaseClient;

abstract class SecureClient extends BaseClient
{

    protected $clientSecret;

    public function __construct($clientId, $clientSecret, $authResource)
    {
        parent::__construct($clientId, $authResource);
        $this->clientSecret = $clientSecret;
    }
}
