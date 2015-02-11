<?php

namespace kolyunya\oauth2\validation\clients;

use kolyunya\oauth2\validation\SecureClient;

class FacebookClient extends SecureClient
{

    public function __construct($clientId, $clientSecret)
    {
        $authResource = 'https://graph.facebook.com/debug_token';
        parent::__construct($clientId, $clientSecret, $authResource);
    }

    protected function getAuthQuery($userToken)
    {
        $parameters = [
            'input_token' => $userToken,
            'access_token' => implode('|', [$this->clientId, $this->clientSecret]),
        ];
        $query = http_build_query($parameters);
        return $query;
    }

    protected function validateToken($userId, $response)
    {
        if (isset($response->data->error) ||
            ! $response->data->is_valid) {
            return false;
        }
        if ((string)$response->data->user_id !== (string)$userId) {
            return false;
        }
        return true;
    }
}
