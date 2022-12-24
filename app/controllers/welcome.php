<?php

class welcome extends Controller
{
    public function index() 
    {

        $this->view('admin/dashboard');
    }  
    

    public function admin() 
    {
        $this->view('admin/dashboard');

    }  
    public function warehouse() 
    {
        $this->view('warehouse/dashboard');
    }

    public function commercial() 
    {
        $this->view('commercial/dashboard');
    }  

    public function fleet() 
    {
        $this->view('fleet/dashboard');
    }  


    public function signout()
    {
        header("Location: " . BASEURL . "/home");
        session_start();
        session_destroy();
    }
    

}
?>