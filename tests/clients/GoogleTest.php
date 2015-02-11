<?php

namespace kolyunya\oauth2\validation\tests\clients;

use PHPUnit_Framework_TestCase;
use kolyunya\oauth2\validation\tests\BaseTest;
use kolyunya\oauth2\validation\clients\GoogleClient;

class GoogleTest extends BaseTest
{

    protected $userId = '108445118146307618725';

    protected $userValidAccessToken = 'ya29.FwHmpNBw0C_LZjOKgDQV_-xUh9GJIpM6kaxgHlC1PZjzlbJzT36DQUAjJlEByJYEtbOyedqlnWEvRA';

    protected $userInvalidAccessToken = '!ya29.FwHmpNBw0C_LZjOKgDQV_-xUh9GJIpM6kaxgHlC1PZjzlbJzT36DQUAjJlEByJYEtbOyedqlnWEvRA';

    protected $clientId = '407408718192.apps.googleusercontent.com';

    protected function setUp()
    {
        $this->client = new GoogleClient($this->clientId);
    }
}
