<?php

class Home extends Controller
{
    public function index() 
    {
<<<<<<< Updated upstream
        $this->view('login/userselection');
    }  
    
=======
        $this->view('login/login');
    }  
>>>>>>> Stashed changes

    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['username']);
<<<<<<< Updated upstream
        header('Location: '.BASEURL.'/login');
=======
        header('Location: '.BASEURL.'/login/employee');
>>>>>>> Stashed changes
    }
    

}
?>