<?php

class loginModel extends Model
{
    protected $result;

    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< Updated upstream
    public function login($username, $password,$usertype)
    {
        return $this->get("admin", "username = '$username' AND password = '$password'");
    
    }
   
   
=======
    public function login($username, $password)
    {

        return $this->get('users',"username = '$username' AND password = '$password'");


    
    }

   

>>>>>>> Stashed changes
}