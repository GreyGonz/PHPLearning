<?php
/**
 * Created by PhpStorm.
 * User: grey
 * Date: 25/09/17
 * Time: 21:46
 */

class App
{

    protected $registry = [];

    public static function bind($name,$value)
    {
        static::$registry[$name] = $value;
    }

    public static function resolve($name)
    {
        if (!array_key_exists($name,static::$registry)) throw new Exception("No route found");

        return static::$registry[$name];
    }
}