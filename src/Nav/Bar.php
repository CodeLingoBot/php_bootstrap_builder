<?php

namespace BootstrapBuilder\Nav;

use BootstrapBuilder\Base;
use BootstrapBuilder\Helper;

class Bar extends Base
{
    public static function build(array $item_variables){
        $items = array();
        foreach($item_variables as $item) array_push($items, Item::build($item));
        return Helper::include_partial('nav/bar', array('items' => $items));
    }
}