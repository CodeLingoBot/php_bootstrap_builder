<?php

namespace BootstrapBuilder\Nav;

use BootstrapBuilder\Base;
use BootstrapBuilder\Helper;

class ItemDropdownItem extends Base
{

    protected static $required = array('url', 'label');

    public static function build(array $variables)
    {
        self::validate($variables);
        return Helper::include_partial('nav/item_drop_down_item', $variables);
    }
}