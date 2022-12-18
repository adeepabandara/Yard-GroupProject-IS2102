<?php

class signUpModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function register($username, $password, $name, $address, $email_address, $usertype)
    {
        //return $this->get($usertype, "username = '$username' AND password = '$password' AND name = '$name' AND address = '$address' AND email = '$email_address'");
        return $this->insert($usertype, [
            'name' => $name,
            'address' => $address,
            'email_address' => $email_address,
            'username' => $username,
            'password' => $password
        ]);
    }
   
   
}