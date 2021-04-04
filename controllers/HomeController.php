<?php

class HomeController
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/?controller=auth&method=login');
        }
        include 'views/page/index.php';
    }
}
