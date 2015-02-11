<?php

namespace kolyunya\oauth2\validation;

use Exception;

abstract class BaseClient implements IClient
{

    protected $clientId;

    protected $authResource;

    public function __construct($clientId, $authResource)
    {
        $this->clientId = $clientId;
        $this->authResource = $authResource;
    }

    public function validate($userId, $userToken)
    {
        try {
            $requestUrl = $this->getAuthUrl($userToken);
            $response = $this->getResponse($requestUrl);
            $tokenIsValid = $this->validateToken($userId, $response);
        } catch ( Exception $exception ) {
            return false;
        }
        return $tokenIsValid;
    }

    abstract protected function getAuthQuery($userToken);

    abstract protected function validateToken($userId, $response);

    private function getAuthUrl($userToken)
    {
        $query = $this->getAuthQuery($userToken);
        $url = $this->authResource . '?' . $query;
        return $url;
    }

    private function getResponse($url)
    {
        $response = file_get_contents($url);
        if ($response === false) {
            throw new Exception('Could not validate access token.');
        }
        $responseData = json_decode($response);
        if ($responseData === null) {
            throw new Exception('Could not validate access token.');
        }
        return $responseData;
    }
}
