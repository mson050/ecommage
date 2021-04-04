<?php

class Session
{
    public static function get($key='')
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
}
