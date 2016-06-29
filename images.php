<?php
/**
 * Created by PhpStorm.
 * User: jbrashear
 * Date: 6/29/16
 * Time: 10:12 AM
 * https://developers.trustpilot.com/resources-api
 * include in feed.  requires config to be loaded first.
 */




/**
 * @param $starCount
 * @return mixed|object|string
 */

function stars($starCount)
{

    $stars = sendrequest("/resources/images/stars/" . $starCount);

    $url = reset(array_map(function ($star) {
        if (isset ($star->url)) {
            return $star->url;
        } else {
            return $star;
        }
    }, get_object_vars($stars)));


    $stars = "<img class =\"tpstar\" src=\"" . $url . "\">";

    return $stars;
}
