<?php

class User extends DB
{
    public function createNewUser($fullname, $username, $password,$job)
    {
        $password = md5($password);
        return $this->store('users', [
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'job'      => $job,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
    public function updateProfile($fullname,$job)
    {
        return $this->update('users', [
            'fullname' => $fullname,
            'job'      => $job,
            'updated_at' => date('Y-m-d H:i:s'),
        ],Session::get('user')['id']);
    }

    // public function changePassword($oldPassword,$newPassword)
    // {
    //     $oldPassword = md5($oldPassword);
    //     if($oldPassword == Session::get('user')['password'] ){
    //         return $this->update('users', [
    //             'password' => $newPassword,
    //             'updated_at' => date('Y-m-d H:i:s'),
    //         ],Session::get('user')['id']);
    //     }
    // }

    public function checkLogin($username, $password)
    {
        $user = $this->queryFirst('users', 'username', $username);
        if (!$user) {
            return false;
        }

        if (md5($password) === $user['password']) {
            return $user;
        }

        return false;
    }
    public function checkAccount($username)
    {
        $sql = "SELECT * FROM users ";
        $connection = $this->getConnection();
        $result = $connection->query($sql);
        $users = [];
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        
        foreach($users as $user){
            if($user['username'] == $username){
                return false;
            }
        }
        return true;
    
    }
}
