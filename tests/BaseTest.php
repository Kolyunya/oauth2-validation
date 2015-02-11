<?php

namespace kolyunya\oauth2\validation\tests;

use PHPUnit_Framework_TestCase;

class BaseTest extends PHPUnit_Framework_TestCase
{

    protected $userId;

    protected $userValidAccessToken;

    protected $userInvalidAccessToken;

    protected $clientId;

    protected $clientSecret;

    protected $client;

    public function testValidTokenIsBeingValidated()
    {
        $authenticated = $this->client->validate($this->userId, $this->userValidAccessToken);
        $this->assertEquals(true, $authenticated);
    }

    public function testInvalidTokenIsNotBeingValidated()
    {
        $authenticated = $this->client->validate($this->userId, $this->userInvalidAccessToken);
        $this->assertEquals(false, $authenticated);
    }
}
