<?php

class signup extends Controller
{
    public function index()
    {
        $this->view('login/commercialsignup');
    }

    public function commercial()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $exist = $this->model('insertModel')->commercialCheck('username', $_POST['username']);
            if ($exist->num_rows > 0) {
                echo "<script>alert('Username already exist!')</script>";
                echo "<script>history.back();</script>";
            } else {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $this->model('insertModel')->addCommercial(
                    $name,
                    $username,
                    $password
                );

                header("Location: " . BASEURL . "/login/commercialLogin");
            }
        } else {
            $this->view('login/commercialsignup');
        }
    }
}
