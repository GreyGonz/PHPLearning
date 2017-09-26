<?php

namespace PerroPolesiaFramework;


class App
{

    protected static $registry = [];

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