<?php

namespace BootstrapBuilder;

class Alert extends Base
{
    private static $key = 'bootstrap_builder_messages';

    public static function clear()
    {
        $GLOBALS[self::$key] = array();
    }

    public static function build(array $variables)
    {
        if (empty($variables['message'])) return;
        if (!isset($GLOBALS[self::$key])) self::clear();
        $GLOBALS[self::$key][] = Helper::include_partial('alert', $variables);
    }

    public static function show()
    {
        if (!isset($GLOBALS[self::$key])) return;
        foreach ($GLOBALS[self::$key] as $message) echo $message;
    }
}