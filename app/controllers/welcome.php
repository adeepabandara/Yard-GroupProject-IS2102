<?php

class welcome extends Controller
{
<<<<<<< Updated upstream


    public function index() 
    {
        $this->view('admin/dashboard');
    } 
=======
    public function index() 
    {

        $this->view('admin/dashboard');
    }  
    
>>>>>>> Stashed changes

    public function admin() 
    {
        $this->view('admin/dashboard');
<<<<<<< Updated upstream
    }   
=======

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
>>>>>>> Stashed changes


    public function signout()
    {
        header("Location: " . BASEURL . "/home");
        session_start();
        session_destroy();
    }
    

}
?>