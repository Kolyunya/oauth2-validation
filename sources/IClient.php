<?php

namespace kolyunya\oauth2\validation;

interface IClient
{

    public function validate($userId, $userToken);
}
