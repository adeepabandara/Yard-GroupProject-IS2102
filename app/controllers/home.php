<?php

class Home extends Controller
{
    public function index() 
    {
        $this->view('login/userselection');
    }  

    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);
        header('Location: '.BASEURL.'/login/employee');
    }
    

}
?>