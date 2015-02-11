<?php

namespace kolyunya\oauth2\validation\tests;

use PHPUnit_Framework_TestCase;
use kolyunya\oauth2\validation\ClientFactory;

class ClientFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testFacebookConstruction()
    {
        $clientData = [
            'Facebook' => [
                'clientId' => '313943612124600',
                'clientSecret' => 'aa98d099bc75b2576c67ef20c84a838f',
            ],
        ];
        $factory = new ClientFactory('Facebook', $clientData);
        $client = $factory->make();
        $clientTypeExpected = 'kolyunya\oauth2\validation\clients\FacebookClient';
        $clientType = get_class($client);
        $this->assertEquals($clientTypeExpected, $clientType);
    }

    public function testGoogleConstruction()
    {
        $clientData = [
            'Google' => [
                'clientId' => '407408718192.apps.googleusercontent.com',
            ],
        ];
        $factory = new ClientFactory('Google', $clientData);
        $client = $factory->make();
        $clientTypeExpected = 'kolyunya\oauth2\validation\clients\GoogleClient';
        $clientType = get_class($client);
        $this->assertEquals($clientTypeExpected, $clientType);
    }

    public function testVkontakteConstruction()
    {
        $clientData = [
            'Vkontakte' => [
                'clientId' => '4640662',
                'clientSecret' => 'Cv8uxCxnjIAooK7dyDwp',
            ],
        ];
        $factory = new ClientFactory('Vkontakte', $clientData);
        $client = $factory->make();
        $clientTypeExpected = 'kolyunya\oauth2\validation\clients\VkontakteClient';
        $clientType = get_class($client);
        $this->assertEquals($clientTypeExpected, $clientType);
    }
}
