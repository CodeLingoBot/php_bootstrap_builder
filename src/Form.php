<?php

namespace BootstrapBuilder;

use BootstrapBuilder\Form\Field;

class Form extends Base
{

    protected static $required = array('action', 'method', 'submit');
    protected static $empty = array('inline');

    public static function build(array $variables)
    {
        self::validate($variables);
        $variables['fields'] = array_map(function($fields) {
            return Field::build($fields);
        }, $variables['fields']);
        $variables['submit'] = Button::build($variables['submit']);
        return Helper::include_partial('form', $variables);
    }
}