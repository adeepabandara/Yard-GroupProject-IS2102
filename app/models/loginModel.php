<?php

class loginModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
    public function login($email_address, $password)
    {

        return $this->get("customer", "email_address = '$email_address' AND password = '$password'");


    
    }

   

}