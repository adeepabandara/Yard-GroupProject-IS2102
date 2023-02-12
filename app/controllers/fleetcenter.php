<?php

  session_start();

class FleetCenter extends Controller{

    public function index() 
    {
        $this->view('fleet/dashboard');
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



    public function createFleetJob()
    {
      $this->view('fleet/createFleetJob');
    }






    public function vehicle()
    {
      $result=$this->model('viewModel')->viewVehicle();

      $data = [
        'inputValue' => "",
        'result' => $result, ];

        $this->view('fleet/addVehicle', $data);

   
    }

    public function getVehicle($vid = null){
        $result=$this->model('viewModel')->viewVehicle( $vid );
        $json = array();
        while($row = $result->fetch_assoc()){
            $array['id'] = $row['product_code'];
            $array['model'] = $row['name'];
            $array['reg_no '] = $row['bar_code'];
            $array['engine_no'] = $row['category'];
            $array['opening_stock'] = $row['opening_stock'];
            $array['mf_year'] = $row['reorder_level'];
            $array['color'] = $row['purchase_price'];
            $array['category'] = $row['category'];
            $array['documents'] = $row['selling_price'];
            array_push($json, $array);
        }
        $response = json_encode($json);
       
        echo $response;
        
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



    public function deleteVehicle($id)
    {
        if (isset($id)) {
            $this->model('deleteModel')->deleteVehicle($id);
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

}

    public function addDriver()
    {
        if (isset($_SESSION['username'])) {
            $driver_id = (int) $_POST['driver_id'];
            $name = $_POST['name'];
            $nic = (int) $_POST['nic'];
            $contact_no = (int) $_POST['contact_no'];
            $address = $_POST['address'];
            $email_address = (int) $_POST['email_address'];
            $username = (int) $_POST['username'];
            $password = (int) $_POST['password'];

            $this->model('insertModel')->addDriver($driver_id, $name, $nic, $contact_no, $address, $email_address, $username, $password);
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

    public function fleetJob()
    {
      $poList=$this->model('viewModel')->viewPoList();
      $poListDetails=$this->model('viewModel')->viewPoListDetails();
      $id=$this->model('viewModel')->viewId('fleet_job','fj_code');

      $data = [
        'inputValue' => "",
        'poList' => $poList,
        'id' => $id,
        'poListDetails' => $poListDetails,

      ];
  
  
        $this->view('fleet/createFleetJob',$data);
    }


    public function viewFleetJob()
    {
        $result=$this->model('viewModel')->viewFleetJob();
        

        $data = [
            'inputValue' => "",
            'fleet_jobs' => $result,
      
          ];
          $this->view('driver/fleetJobs',$data);
    }



    public function purchaseOrder()
    {
      
      $result=$this->model('viewModel')->viewRequisitionProducts();
      $result1=$this->model('viewModel')->viewRequisitionList();
      $data = [
        'inputValue' => "",
        'requisitionproducts' => $result,
        'requisitionList' => $result1,
  
      ];
  
      $this->view('commercial/createPO',$data);
    }
  
  



}
?>