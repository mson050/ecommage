<?php

class AuthController
{
    public function login()
    {
        include 'views/auth/login.php';
    }

    public function register()
    {
        include 'views/auth/register.php';
    }

    public function update()
    {
        include 'views/auth/update.php';
    }

    public function edit()
    {
        $fullname = PostRequest::get('fullname');
        $job      = PostRequest::get('job');
        $userModel = new User;
        $userModel->updateProfile($fullname,$job);
        $_SESSION['user']['fullname'] = $fullname;
        $_SESSION['user']['job'] = $job;
        redirect('/?controller=auth&method=update');
    }

    public function registerSubmit()
    {

        $fullname = PostRequest::get('fullname');
        $username = PostRequest::get('username');
        $password = PostRequest::get('password');
        $job      = PostRequest::get('job');
        $rePassword = PostRequest::get('repassword');

        $userModel = new User;
        if($userModel->checkAccount($username) == false) {
            redirect('/?controller=auth&method=register');
            die();
        }
        $userModel->createNewUser($fullname, $username, $password,$job);
        // echo "Register Success";
        redirect('/?controller=auth&method=login');
    }

    public function loginSubmit()
    {
        $username = PostRequest::get('username');
        $password = PostRequest::get('password');
        $userModel = new User;
        $user = $userModel->checkLogin($username, $password);
        if (!$user) {
            redirect('/?controller=auth&method=login');
        }
        $_SESSION['user'] = $user;
        redirect('/');
    }

    public function logout()
    {
        session_destroy();
        redirect('/?controller=auth&method=login');
    }

}
