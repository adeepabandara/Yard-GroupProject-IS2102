<?php
session_start();

class FleetCenter extends Controller
{


    public function addVehicle()
    {
        // var_dump($_SESSION['username']);
        // exit();
        if (isset($_SESSION['username'])) {
            $id = (int) $_POST['id'];
            $reg_no = $_POST['reg_no'];
            $model = $_POST['model'];
            $chassis_no = $_POST['chassis_no'];
            $engine_no = $_POST['engine_no'];
            $mf_year = $_POST['mf_year'];
            $color = $_POST['color'];
            $category = $_POST['category'];

            $this->model('insertModel')->addVehicle($reg_no, $model, $chassis_no, $engine_no, $color, $category, $mf_year);

            header("Location: " . BASEURL . "/welcome");

        } else {
            echo ("Missing mandotary addtribute");
            header("Location: " . BASEURL . "/welcome");
        }
    }

    public function addCategory()
    {
        echo json_encode($_POST);

        if (isset($_SESSION['username'])) {
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