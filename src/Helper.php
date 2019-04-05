<?php

namespace BootstrapBuilder;

class Helper
{
    public static function include_partial($partial, $variables = array())
    {
        foreach ($variables as $key => $variable){
            ${$key} = $variable;
        }
        if (isset($required)){
            if ($required === 'false') $required = false;
            else if ($required !== 'false') $required = Config::val('default_required', 'false');
        }
        $json = json_decode(file_get_contents(dirname(__FILE__)."/../../../../composer.json"), JSON_OBJECT_AS_ARRAY);
        ob_start();
        include 'partials/'.$json['require']['twbs/bootstrap']."/".$partial.".php";
        return ob_get_clean();
    }

    public static function is_current_url($url)
    {
        $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
        $complete_url = $base_url . $_SERVER["REQUEST_URI"];
        return $complete_url == $url || $complete_url == $url."/";

    }

    public static function snake_case($value, $delimiter = '_')
    {
        if (! ctype_lower($value)) {
            $value = preg_replace('/\s+/u', '', ucwords($value));
            $value = strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1'.$delimiter, $value));
        }
        return $value;
    }
}