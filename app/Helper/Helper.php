<?php


if (!function_exists('activeClass'))
{
    function activeClass($name)
    {
        $currentRouteName = Route::currentRouteName();
        $result = "";
        if(strpos($currentRouteName, $name) !== false) {
            $result = "active";
        }
        return $result;
    }
}

if (!function_exists('isActive'))
{
    function isActive($is_active)
    {
        $status = [ 'Nonaktif', 'Aktif'];
        return $status[$is_active];
    }
}