<?php

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

        } else {
            echo ("Missing mandotary addtribute");
            exit();
            // header("Location: " . BASEURL . "/welcome");
        }
    }

}
?>