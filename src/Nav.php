<?php

namespace BootstrapBuilder;

use BootstrapBuilder\Nav\Bar;

class Nav extends Base
{
    protected static $required = array('url');
    protected static $empty = array('logo', 'fixedTop', 'bg');

    public static function build(array $variables){
        self::validate($variables);
        $variables['bars'] = array_map(function($bar_variable) {
            return Bar::build($bar_variable);
        }, $variables['bars']);
        $variables['logo'] = empty($variables['logo']) ? Config::val('no_image') : $variables['logo'];
        return Helper::include_partial('nav', $variables);
    }
}