<?php

namespace BootstrapBuilder;

use Exception;

class Base {

    protected static $required = array();
    protected static $empty = array();

    protected static function validate(&$variables){
        $called = get_called_class();
        foreach($called::$required as $attribute)
            if (empty($variables[$attribute])) throw new Exception("attribute ".$attribute." not defined");
        foreach($called::$empty as $attribute)
            $variables[$attribute] = empty($variables[$attribute]) ? '' : $variables[$attribute];
    }

    public static function build(array $variables)
    {
        throw new Exception("build function not implemented");
    }
}