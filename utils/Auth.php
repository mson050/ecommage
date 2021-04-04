<?php
class Auth
{
    public static function check()
    {
        return Session::get('user');
    }
}
