<?php

class welcome extends Controller
{
    public function index() 
    {
        $this->view('dashboard1/dashboard');
    }  

    public function commercial() 
    {
        $this->view('commercial/dashboard');
    }  


    public function signout()
    {
        header("Location: " . BASEURL . "/home");
        session_start();
        session_destroy();
    }
    

}
?>