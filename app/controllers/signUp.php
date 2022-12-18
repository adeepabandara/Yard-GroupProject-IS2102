<?php

//session_start();
// var_dump('test');
// exit();

// if (isset($_SESSION['username'])) {
//     header('Location: ' . BASEURL . '/welcome');
// }

class signUp extends Controller
{
    public function index()
    {
        $this->view('signUp/fleetRegister');
    }

    public function admin()
    {
        $this->view('register/admin');
    }

    public function adminRegister()
    {
        // if (isset($_POST['username'])) {

        //     $username = $_POST['username'];
        //     $password = $_POST['password'];

        //     $this->login($username, $password, 'admin');
        // } else {
        //     header("Location: " . BASEURL . "/login/admin");
        // }
    }

    public function fleetRegister()
    {
        if (isset($_POST['username'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email_address = $_POST['email_address'];

            $this->Register($username, $password, $name, $address, $email_address, 'fleetcenter');
        } else {
            header("Location: " . BASEURL . "/signUp/fleetRegister");
        }
    }

    public function Register($username = null, $password = null, $name = null, $address = null, $email_address=null, $usertype = null)
    {
        if ($username != null) {
            $path = BASEURL;
            //echo $username;

            $result = $this->model('signUpModel')->register($username, $password, $name, $address, $email_address, $usertype);

            if ($result != null) {
                session_destroy();

                session_start();

                //$row = $result->fetch_assoc();
                // echo $row['username'];
                $_SESSION['username'] = $username;
                echo "success";
                header("location: $path/welcome");

            } else {
                echo "<br>Error<br><br><br> ";
                // header("location: $path/welcome");
            }

        } else {

            echo "Invalid user";
            $this->view('signUp/fleetRegister');
        }
    }


}


class signup extends Controller
{
    public function index()
    {
        $this->view('signUp');
    }

    public function warehouse()
    {
        // check request method
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $exist = $this->model('insertModel')->userCheck('username', $_POST['username']);
            if ($exist->num_rows > 0) {
                echo "<script>alert('Username already exist!')</script>";
                echo "<script> history.back(); </script>";
            } else {
                $exist = $this->model('insertModel')->userCheck('email_address', $_POST['email_address']);
                if ($exist->num_rows > 0) {
                    echo "<script>alert('Email already exist!')</script>";
                    echo "<script> history.back(); </script>";
                } else {
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email_address'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $warehouse_code = 0;
                    $fleet_center = 0;
                    $capacity = 0;

                    $this->model('insertModel')->addWarehouse(
                        $warehouse_code,
                        $name,
                        $address,
                        $email,
                        $fleet_center,
                        $capacity,
                        $username,
                        $password
                    );
                    header("Location: " . BASEURL . "/login/warehouse");
                }
            }
        } else {
            $this->view('signUp/warehouse');
        }
    }
}

