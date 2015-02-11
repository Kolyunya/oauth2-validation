<?php

namespace kolyunya\oauth2\validation\clients;

use kolyunya\oauth2\validation\BaseClient;

class GoogleClient extends BaseClient
{

    public function __construct($clientId)
    {
        $authResource = 'https://www.googleapis.com/oauth2/v2/tokeninfo';
        parent::__construct($clientId, $authResource);
    }

    protected function getAuthQuery($userToken)
    {
        $parameters = [
            'access_token' => $userToken,
        ];
        $query = http_build_query($parameters);
        return $query;
    }

    protected function validateToken($userId, $response)
    {
        if (isset($response->error) ||
            ! isset($response->audience) ||
            ! isset($response->user_id)) {
            return false;
        }
        if ((string)$response->audience !== (string)$this->clientId ||
            (string)$response->user_id !== (string)$userId) {
            return false;
        }
        return true;
    }
}
