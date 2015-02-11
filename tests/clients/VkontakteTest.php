<?php

namespace kolyunya\oauth2\validation\tests\clients;

use PHPUnit_Framework_TestCase;
use kolyunya\oauth2\validation\tests\BaseTest;
use kolyunya\oauth2\validation\clients\VkontakteClient;

class VkontakteTest extends BaseTest
{

    protected $userId = '1466311';

    protected $userValidAccessToken = 'dbce8f5cd0828e6cde4e6c74fbeec713e07ba03bb23d4301cb906a13659f6ee8717d1c39b18d441ceb4f9';

    protected $userInvalidAccessToken = '!dbce8f5cd0828e6cde4e6c74fbeec713e07ba03bb23d4301cb906a13659f6ee8717d1c39b18d441ceb4f9';

    protected $clientId = '4640662';

    protected $clientSecret = 'Cv8uxCxnjIAooK7dyDwp';

    protected function setUp()
    {
        $this->client = new VkontakteClient($this->clientId, $this->clientSecret);
    }
}
