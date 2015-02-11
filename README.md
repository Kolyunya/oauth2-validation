# OAuth validation

# Description
The library provides a uniform API for validation of OAuth2 access tokens of various platforms. That is using the library you can check if the access token you receive from the client is valid for a specific user of a platform.

# Supported platforms
* Facebook
* Google
* Vkontakte

# Usage example
```php
$userId = "User's Google ID";
$userToken = "Users's access token to your application";
$clientId = "Your Google application ID";
$googleClient = new GoogleClient($clientId);
$authenticated = $googleClient->validate($userId, $userToken);
if ($authenticated) {
    // User provided valid authentication credentials
} else {
    // User provided invalid authentication credentials
}
```

# Build status
[![Build Status](https://travis-ci.org/Kolyunya/oauth2-validation.svg)](https://travis-ci.org/Kolyunya/oauth2-validation) [![License](https://poser.pugx.org/kolyunya/oauth-authentication/license.svg)](https://packagist.org/packages/kolyunya/oauth2-validation)
