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

    public function fleetcenter() 
    {
        $this->view('admin/fleetcenter');
    }  


    public function commercial() 
    {
        $this->view('admin/commercial');
    }  
    


    public function createWarehouse()
    {
        if (isset($_POST['username'])) {

            $warehouse_code = $_POST['warehouse_code'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email_address = $_POST['email_address'];

            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $cp_name = $_POST['cp_name'];
            $cp_number = $_POST['cp_number'];

            $fleet_center = $_POST['fleet_center'];
            $capacity = $_POST['capacity'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model('insertModel')->addWarehouse($warehouse_code, $name,$longitude,$latitude,$cp_name,$cp_number, $address, $email_address, $fleet_center, $capacity, $username, $password);
            $this->model('mailModel')->sendMail($email_address, $username, $password,$cp_name);
            header("Location: " . BASEURL . "/adminFunctions/warehouse");

        } else {
            header("Location: " . BASEURL . "/welcome/warehouse");
        }
    }


    public function createFleetcenter()
    {
        if (isset($_POST['username'])) {

            $fleetcenter_code = $_POST['fleetcenter_code'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email_address = $_POST['email_address'];
            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $cp_name = $_POST['cp_name'];
            $cp_number = $_POST['cp_number'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model('insertModel')->addFleetcenter($fleetcenter_code, $name,$longitude,$latitude,$cp_name,$cp_number, $address, $email_address, $username, $password);
            $this->model('mailModel')->sendMail($email_address, $username, $password,$cp_name);

            header("Location: " . BASEURL . "/adminFunctions/fleetcenter");

        } else {
            header("Location: " . BASEURL . "/welcome/fleetCenter");
        }
    }




    public function createCommercial_User()
    {
        if (isset($_POST['username'])) {

            $department_code = $_POST['department_code'];
            $job_position = $_POST['job_position'];
            $employee_id = $_POST['employee_id'];
            $nic = $_POST['nic'];
            $address = $_POST['address'];
            $email_address = $_POST['email_address'];
            $cp_name = $_POST['cp_name'];
            $cp_number = $_POST['cp_number'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model('insertModel')->addCommercial_User($department_code,$job_position,$employee_id,$nic, $cp_name,$cp_number, $address, $email_address, $username, $password);
            $this->model('mailModel')->sendMail($email_address, $username, $password,$cp_name);

            header("Location: " . BASEURL . "/adminFunctions/commercial");

        } else {
            header("Location: " . BASEURL . "/welcome/commercial");
        }
    }









    public function deleteWarehouse($warehouse_code)
    {
        if (isset($warehouse_code)) {
            $this->model('deleteModel')->deleteWarehouse($warehouse_code);
            header("Location: " . BASEURL . "/adminFunctions/warehouse");

        }
    }


    public function viewWarehouse($warehouse_code)
    

    {   

        if (isset($warehouse_code)) {
            $this->model('viewModel')->viewWarehouse($warehouse_code);
            $this->view('admin/viewWarehouse');


        }
    }

}

?>