<?php

namespace kolyunya\oauth2\validation;

use ReflectionClass;

class ClientFactory
{

    protected $clientName;

    protected $clientsData;

    public function __construct($clientName, $clientsData)
    {
        $this->clientName = $clientName;
        $this->clientsData = $clientsData;
    }

    public function make()
    {
        $clientData = $this->clientsData[$this->clientName];
        $clientPrefix = 'kolyunya\\oauth2\\validation\\clients\\';
        $clientClassName = $clientPrefix . $this->clientName . 'Client';
        $clientReflection = new ReflectionClass($clientClassName);
        $client = $clientReflection->newInstanceArgs($clientData);
        return $client;
    }
}
