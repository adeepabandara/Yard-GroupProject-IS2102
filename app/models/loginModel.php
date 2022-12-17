<?php

class loginModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function login($username, $password,$usertype)
    {
        return $this->get($usertype, "username = '$username' AND password = '$password'");
    
    }
   
   
}