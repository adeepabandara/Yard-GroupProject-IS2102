<?php

class adminFunctions extends Controller


{

    public function index() 
    {
        $this->view('admin/dashboard');
    }  

    public function warehouse() 
    {
        $this->view('admin/warehouse');
    }  

    public function fleetCenter() 
    {
        $this->view('admin/fleetCenter');
    }  
    public function commercial() 
    {
        $this->view('admin/commercial');
    }  


}

?>