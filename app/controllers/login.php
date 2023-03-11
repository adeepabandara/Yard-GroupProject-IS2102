<?php





class login extends Controller
{
    public function index()
    {
        $this->view('login/login');
    }




    public function customerLogin()
    {
        if (isset($_POST['email_address'])) {

            $email_address = $_POST['email_address'];
            $password = $_POST['password'];

            if ($email_address != null) {
                $path = BASEURL;
                //echo $username;

                $result = $this->model('loginModel')->login($email_address, $password);


            }

            if ($result->num_rows > 0) {
                
                session_destroy();

                session_start();

                $row = $result->fetch_assoc();


                echo $row['email_address'];
       
                $_SESSION['email_address'] = $row['email_address'];
                echo "success";

                header("location: $path/home");



            } else {
                echo "<br>Error<br><br><br> ";
                header("location: $path/home");
            }



        } 
        
        
        else {

            echo "Invalid user";
            $this->view('login/admin');
        }

    }
}

?>