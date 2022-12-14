<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: ' . BASEURL . '/welcome');
}

class login extends Controller
{
    public function index()
    {
        $this->view('login/admin');
    }

    public function admin()
    {
        $this->view('login/admin');
    }

    public function adminLogin()
    {
        if (isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->login($username, $password, 'admin');
        } else {
            header("Location: " . BASEURL . "/login/admin");
        }
    }

    public function warehouse()
    {
        $this->view('login/warehouse');
    }

    public function warehouseLogin()
    {
        if (isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->login($username, $password, 'warehouse');
        } else {
            // header("Location: " . BASEURL . "/login/warehouse");
            $this->view('login/warehouse');
        }
    }


    public function login($username = null, $password = null, $usertype = null)
    {
        if ($username != null) {
            $path = BASEURL;
            //echo $username;

            $result = $this->model('loginModel')->login($username, $password, $usertype);

            if ($result->num_rows > 0) {
                session_destroy();

                session_start();

                $row = $result->fetch_assoc();
                echo $row['username'];
                $_SESSION['username'] = $row['username'];
                echo "success";
                header("location: $path/welcome/$usertype");
            } else {
                echo "<br>Error<br><br><br> ";
                header("location: $path/welcome");
            }
        } else {

            echo "Invalid user";
            $this->view('login/admin');
        }
    }
}
