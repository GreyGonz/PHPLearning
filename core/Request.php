<?php
/**
 * Created by PhpStorm.
 * User: grey
 * Date: 25/09/17
 * Time: 20:12
 */

class Request
{
    public static function uri()
    {
        // parse_url
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),"/");
    }
}