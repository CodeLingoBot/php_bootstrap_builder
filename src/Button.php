<?php

namespace BootstrapBuilder;

class Button extends Base
{
    protected static $required = array('label', 'class');
    protected static $empty = array('icon', 'type', 'url');

    public static function build(array $variables)
    {
        self::validate($variables);
        $is_link_button = isset($variables['link']) && $variables['link'];
        if ($is_link_button && !isset($variables['url'])) throw new Exception("attribute url not defined");
        return Helper::include_partial($is_link_button ? 'link_button' : 'button', $variables);
    }
}