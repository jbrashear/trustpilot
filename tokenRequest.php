<?php
/**
 * Created by PhpStorm.
 * User: jbrashear
 * Date: 1/26/16
 * Time: 1:41 PM
 * Generate OAuth2 Token From Trustpilot for connection.
 * TIP generate token for each invite request.
 * https://developers.trustpilot.com/authentication#Business user OAuth Token
 */

include 'config.php';

// This is the URL use to request the access token.
$url = 'https://api.trustpilot.com/v1/oauth/oauth-business-users-for-applications/accesstoken';
$request = "grant_type=password&username=".USER_NAME."&password=".PASSWORD;

//open connection
$ch = curl_init();

// This has to be the api_key and secret sent to you originally for the API Added in config.php
$authtoken = base64_encode(API_KEY . ':' . API_SECRET);

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $request);
curl_setopt($ch,CURLOPT_HTTPHEADER, [
    "Authorization: Basic $authtoken",
    "Content-Type: application/x-www-form-urlencoded",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);

// TODO: catch server issue
$obj = json_decode($result);


$token =  $obj->{'access_token'};

//Check to see if it is accessed directly. If Yes 
if(defined('MG360')){
    echo "Start Token Request Dump </br>";

    var_dump($obj);

    echo "Token Used: " . $token;
    echo "</br>End Token Request Dump </br>";
}


//close connection
curl_close($ch);

