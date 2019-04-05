<?php

namespace BootstrapBuilder;

class Config
{
    private static $key = 'bootstrap_builder_config';

    public static function init(array $variables){
        foreach ($variables as $key => $value) self::set($key, $value);
    }

    public static function clear()
    {
        $GLOBALS[self::$key] = array();
    }

    public static function set($key, $value)
    {
        if (!isset($GLOBALS[self::$key])) self::clear();
        $GLOBALS[self::$key][$key] = $value;
    }

    public static function val($key, $default = null)
    {
        if (empty($GLOBALS[self::$key]) || empty($GLOBALS[self::$key][$key])) return $default;
        return $GLOBALS[self::$key][$key];
    }
}