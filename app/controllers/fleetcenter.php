<?php

  session_start();

class FleetCenter extends Controller
{


    public function index() 
    {
        $this->view('dashboard/dashboard');
    }  

    public function vehicle() 
    {
        $this->view('fleet/addVehicle');
    }  


    public function category() 
    {
        $this->view('fleet/addCategory');
    }  
    public function driver() 
    {
        $this->view('fleet/addDriver');
    }  
    public function fuel() 
    {
        $this->view('fleet/addFuelStation');
    }  





    public function addVehicle()
    {
        // var_dump($_SESSION['username']);
        // exit();
        if (isset($_POST['id'])) {
            $id =  $_POST['id'];
            $reg_no = $_POST['reg_no'];
            $model = $_POST['model'];
            $chassis_no = $_POST['chassis_no'];
            $engine_no = $_POST['engine_no'];
            $mf_year = $_POST['mf_year'];
            $color = $_POST['color'];
            $category = $_POST['category'];

            $this->model('insertModel')->addVehicle($reg_no, $model, $chassis_no, $engine_no, $color, $category, $mf_year);

            header("Location: " . BASEURL . "/fleetcenter/vehicle");

        } else {
            echo ("Missing mandotary addtribute");
            header("Location: " . BASEURL . "/fleetcenter/vehicle");
        }
    }

    public function addCategory()
    {

        echo json_encode($_POST);

        if (isset($_POST['username'])) {
            $vehicle_code = (int) $_POST['categoryId'];
            $description = $_POST['description'];
            $name = $_POST['categoryName'];

            $this->model('insertModel')->addCategory($vehicle_code, $name, $description);
            header("Location: " . BASEURL . "/welcome");


        if (isset($_SESSION['username'])) {
            $vehicle_category_code = (int) $_POST['vehicle_category_code'];
            $description = $_POST['description'];
            $name = $_POST['name'];

            $this->model('insertModel')->addVehicleCategory($vehicle_category_code, $name, $description);
            header("Location: " . BASEURL . "/fleetcenter/category");

        } else {
            echo ("Missing mandotary addtribute");
            exit();
            // header("Location: " . BASEURL . "/welcome");
        }
    }

    public function addDriver()
    {
        if (isset($_SESSION['username'])) {
            $driverId = (int) $_POST['driverId'];
            $name = $_POST['name'];
            $nic = (int) $_POST['nic'];
            $contactNo = (int) $_POST['contactNo'];
            $address = $_POST['address'];
            $eAddress = (int) $_POST['eAddress'];
            $uName = (int) $_POST['uName'];
            $password = (int) $_POST['password'];

            $this->model('insertModel')->addDriver($driverId, $name, $nic, $contactNo, $address, $eAddress, $uName, $password);
            header("Location: " . BASEURL . "/fleetcenter/driver");


        } else {
            echo ("Missing mandotary addtribute");
            exit();
            // header("Location: " . BASEURL . "/welcome");
        }
    }


    public function addFuelStation()
    {
        if (isset($_SESSION['username'])) {
            $stationId = (int) $_POST['stationId'];
            $name = $_POST['name'];
            $address =  $_POST['address'];
            $location =  $_POST['location'];
            $creditLimit = $_POST['creditLimit'];
            $contactPerson = $_POST['contactPerson'];
            $contactNo = (int) $_POST['contactNo'];

            $this->model('insertModel')->addFuelStation($stationId, $name, $address, $location, $creditLimit, $contactPerson, $contactNo);
            header("Location: " . BASEURL . "/fleetcenter/fuel");

        } else {
            echo ("Missing mandotary addtribute");
            exit();
            // header("Location: " . BASEURL . "/welcome");
        }
    }



}
?>