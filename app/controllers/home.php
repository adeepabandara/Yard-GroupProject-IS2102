<?php

class Home extends Controller
{
    public function index() 
    {

        $this->view('login/userselection');
    }  
    
        $this->view('login/login');
    }  

 


    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);

        header('Location: '.BASEURL.'/login');

        header('Location: '.BASEURL.'/login/employee');

    }
    

}
?>