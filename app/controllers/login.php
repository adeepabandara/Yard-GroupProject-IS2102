<?php
session_start();
<<<<<<< Updated upstream
=======
// var_dump('test');
// exit();
>>>>>>> Stashed changes

if (isset($_SESSION['username'])) {
    header('Location: ' . BASEURL . '/welcome');
}

class login extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
        $this->view('login/admin');
    }

    public function admin()
    {
        $this->view('login/admin');
    }

    public function adminLogin()
=======

        $this->view('login/login');
    }

    public function login()
>>>>>>> Stashed changes
    {
        if (isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

<<<<<<< Updated upstream
            $this->login($username, $password, 'admin');
        } else {
            header("Location: " . BASEURL . "/login/admin");
        }
    }


    public function login($username = null, $password = null, $usertype = null)
    {
        if ($username != null) {
            $path = BASEURL;
            //echo $username;

            $result = $this->model('loginModel')->login($username, $password, $usertype);

            if ($result != null) {
=======
            if ($username != null) {
                $path = BASEURL;
                //echo $username;

                $result = $this->model('loginModel')->login($username, $password);


            }

            if ($result->num_rows > 0) {
                
>>>>>>> Stashed changes
                session_destroy();

                session_start();

                $row = $result->fetch_assoc();
<<<<<<< Updated upstream
                echo $row['username'];
                $_SESSION['username'] = $row['username'];
                echo "success";
                header("location: $path/welcome");
=======


                echo $row['username'];
                echo $row['user_type'];
                $_SESSION['username'] = $row['username'];
                echo "success";

                header("location: $path/welcome/". $row['user_type'] ."");


>>>>>>> Stashed changes

            } else {
                echo "<br>Error<br><br><br> ";
                header("location: $path/welcome");
            }

<<<<<<< Updated upstream
        } else {
=======


        } 
        
        
        else {
>>>>>>> Stashed changes

            echo "Invalid user";
            $this->view('login/admin');
        }
<<<<<<< Updated upstream
    }


=======

    }
>>>>>>> Stashed changes
}