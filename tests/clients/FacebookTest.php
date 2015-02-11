<?php

namespace kolyunya\oauth2\validation\tests;

use PHPUnit_Framework_TestCase;
use kolyunya\oauth2\validation\tests\BaseTest;
use kolyunya\oauth2\validation\clients\FacebookClient;

class FacebookTest extends BaseTest
{

    protected $userId = '1530267830554763';

    protected $userValidAccessToken = 'CAAEdh7F67bgBANEYbC2720rA1aZCF6EUeZCz2UmvxBZCqODZAZAxuURZAvvGsy3slrr44Ua7krwNUFjJafIP6nJZCdtYUvGQFsRJgfGMJ4mhumIhfpU6oTJN3v6mbfWPKnEqGovQHuZBZA3dSI9tui2JKrClqIM6sxZC5oMZC3RZAZBPv9zBNqWwZCSo9p409JP5NWusRNo1nwZAqbTm3FJiMe5bFx7';

    protected $userInvalidAccessToken = '!CAAEdh7F67bgBANEYbC2720rA1aZCF6EUeZCz2UmvxBZCqODZAZAxuURZAvvGsy3slrr44Ua7krwNUFjJafIP6nJZCdtYUvGQFsRJgfGMJ4mhumIhfpU6oTJN3v6mbfWPKnEqGovQHuZBZA3dSI9tui2JKrClqIM6sxZC5oMZC3RZAZBPv9zBNqWwZCSo9p409JP5NWusRNo1nwZAqbTm3FJiMe5bFx7';

    protected $clientId = '313943612124600';

    protected $clientSecret = 'aa98d099bc75b2576c67ef20c84a838f';

    protected function setUp()
    {
        $this->client = new FacebookClient($this->clientId, $this->clientSecret);
    }
}
