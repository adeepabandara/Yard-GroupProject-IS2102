<?php

class signup extends Controller

{
    
 

    public function verify() 
    {
        if(isset($_POST['email_address'])) {

            
            $name = $_POST['name'];
            $email_address = $_POST['email_address'];
            $otp = rand(100000,999999);
    
            $this->model('mailModel')->sendOTP($name,$email_address,$otp);

            header('Location: '.BASEURL.'/signup/verification');
        }  
        else {
            header('Location: '.BASEURL.'/login');
        }
    }
    


    public function verification()
{

    $this->view('login/verification');
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