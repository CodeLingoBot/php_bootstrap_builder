<?php

namespace BootstrapBuilder\Nav;

use BootstrapBuilder\Base;
use BootstrapBuilder\Helper;

class Item extends Base
{
    protected static $required = array('url', 'label');

    public static function build(array $variables)
    {
        self::validate($variables);
        $variables['active'] = Helper::is_current_url($variables['url']);
        if (empty($variables['id'])) $variables['id'] = self::id($variables);
        return Helper::include_partial('nav/item', $variables);
    }

    private static function id()
    {
        return 'item_'.uniqid();
    }
}