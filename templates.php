<?php
/**
 * Created by PhpStorm.
 * User: jbrashear
 * Date: 1/26/16
 * Time: 4:36 PM
 * This script will generate a list of templates to be used.It will return system templates and custom templates.
 * You will need the template ID for submitting an invite.
 * Get list of invitation templates
 * https://developers.trustpilot.com/invitation-api#Get
 */

include 'config.php';

// Tokens Expire after 4 days. Generate token each request.
// get this token from tokenRequest.php
// $token is generated with tokenRequest.php
include 'tokenRequest.php';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://invitations-api.trustpilot.com/v1/private/business-units/".$businessUnitID."/templates",
    CURLOPT_HTTPHEADER => [
        "token: $token"
    ]
));

$response = curl_exec($curl);


if(defined('MG360')){
    echo "</br>Start Template Request Dump </br>";
    // json object
    var_dump($response);

    echo "</br>End Template Request Dump </br>";
}

curl_close($curl);