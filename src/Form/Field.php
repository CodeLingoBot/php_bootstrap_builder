<?php

namespace BootstrapBuilder\Form;

use BootstrapBuilder\Base;
use BootstrapBuilder\Helper;

class Field extends Base
{

    protected static $required = array('name', 'type', 'label');
    protected static $empty = array('required', 'readonly', 'value', 'helper', 'checked', 'error', 'min', 'max');

    public static function build(array $variables)
    {
        if (isset($variables['type']) && $variables['type'] == 'hidden') $variables['label'] = 'no_label';
        self::validate($variables);
        if (empty($variables['id'])) $variables['id'] = self::id($variables);
        return Helper::include_partial('field/'.$variables['type'], $variables);
    }

    private static function id(array $variables)
    {
        return Helper::snake_case($variables['name']. ucwords($variables['type']));
    }
}