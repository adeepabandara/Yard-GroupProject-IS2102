<?php

class welcome extends Controller
{
    public function index() 
    {
        $this->view('admin/dashboard');
    }  

    public function signout()
    {
        header("Location: " . BASEURL . "/home");
        session_start();
        session_destroy();
    }
    

}
?>