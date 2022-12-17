<?php

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
