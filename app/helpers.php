<?php
if (!function_exists('setActive')) {
    function setActive($routeName)
    {
        return request()->routeIs($routeName) ? 'active' : '';
    }
}
?>