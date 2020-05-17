<?php

class Helpers
{
    public static function getBaseUrl($page = '')
    {
        return ROOT_URL . $page;
    }

    public static function includeStyles($file)
    {
        return ROOT_URL . 'assets/css/' . $file . '.css';
    }

    public static function includeScripts($file)
    {
        return ROOT_URL . 'assets/js/' . $file . '.js';
    }

    public static function userLogged()
    {
        return isset($_SESSION['is_logged']);
    }

    public static function userNotLogged()
    {
        return !isset($_SESSION['is_logged']);
    }

    public static function getUserName()
    {
        return $_SESSION['user']['name'];
    }
}
