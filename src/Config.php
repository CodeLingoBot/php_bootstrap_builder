<?php

namespace BootstrapBuilder;

class Config
{
    private static $key = 'bootstrap_builder_config';

    public static function init($composer, array $variables){
        $json = json_decode(file_get_contents($composer), JSON_OBJECT_AS_ARRAY);
        self::set('bootstrap_version', $json['require']['twbs/bootstrap']);
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