<?php

namespace kolyunya\oauth2\validation\clients;

use kolyunya\oauth2\validation\SecureClient;

class VkontakteClient extends SecureClient
{

    public function __construct($clientId, $clientSecret)
    {
        $authResource = 'https://api.vk.com/method/secure.checkToken';
        parent::__construct($clientId, $clientSecret, $authResource);
    }

    protected function getAuthQuery($userToken)
    {
        $parameters = [
            'token' => $userToken,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];
        $query = http_build_query($parameters);
        return $query;
    }

    protected function validateToken($userId, $response)
    {
        if (isset($response->error)
            || $response->response->success !== 1) {
            return false;
        }
        if ((string)$response->response->user_id !== (string)$userId) {
            return false;
        }
        return true;
    }
}
