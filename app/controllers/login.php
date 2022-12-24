<?php
session_start();
// var_dump('test');
// exit();

if (isset($_SESSION['username'])) {
    header('Location: ' . BASEURL . '/welcome');
}

class login extends Controller
{
    public function index()
    {

        $this->view('login/login');
    }

    public function login()
    {
        if (isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username != null) {
                $path = BASEURL;
                //echo $username;

                $result = $this->model('loginModel')->login($username, $password);


            }

            if ($result->num_rows > 0) {
                
                session_destroy();

                session_start();

                $row = $result->fetch_assoc();


                echo $row['username'];
                echo $row['user_type'];
                $_SESSION['username'] = $row['username'];
                echo "success";

                header("location: $path/welcome/". $row['user_type'] ."");



            } else {
                echo "<br>Error<br><br><br> ";
                header("location: $path/welcome");
            }



        } 
        
        
        else {

            echo "Invalid user";
            $this->view('login/admin');
        }

    }
}