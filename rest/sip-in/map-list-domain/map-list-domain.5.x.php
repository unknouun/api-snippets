<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$ipAccessControlListMapping = $client->sip
    ->domains("SD32a3c49700934481addd5ce1659f04d2")
    ->ipAccessControlListMappings
    ->create("AL95a47094615fe05b7c17e62a7877836c");

echo $ipAccessControlListMapping->sid;
