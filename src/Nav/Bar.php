<?php

namespace BootstrapBuilder\Nav;

use BootstrapBuilder\Base;
use BootstrapBuilder\Helper;

class Bar extends Base
{
    protected static $required = array('items');
    protected static $empty = array('align');

    public static function build(array $variables){
        $variables['items'] = array_map(function($item){
        	return Item::build($item);
        }, $variables['items']);
        return Helper::include_partial('nav/bar', $variables);
    }
}