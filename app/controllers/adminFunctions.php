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

            $this->model('insertModel')->addWarehouse($warehouse_code, $name, $longitude, $latitude, $cp_name, $cp_number, $address, $email_address, $fleet_center, $capacity, $username, $password);
            $this->model('insertModel')->addUser($username, $password, 'warehouse');
            $this->model('mailModel')->sendMail($email_address, $username, $password, $cp_name);

            header("Location: " . BASEURL . "/adminFunctions/viewWarehouse");

        } else {
            header("Location: " . BASEURL . "/welcome/warehouse");
        }



    }


    public function editWarehouse()
    {
        if (isset($_POST['warehouse_code'])) {

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

            $this->model('updateModel')->updateWarehouse($warehouse_code, $name, $longitude, $latitude, $cp_name, $cp_number, $address, $email_address, $fleet_center, $capacity, $username, $password);
         


            header("Location: " . BASEURL . "/adminFunctions/viewWarehouse");

        } else {
            header("Location: " . BASEURL . "/welcome/warehouse");
        }
    }






    public function createFleetCenter()
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

            $this->model('insertModel')->addFleetCenter($fleetcenter_code, $name, $longitude, $latitude, $cp_name, $cp_number, $address, $email_address, $username, $password);
            $this->model('insertModel')->addUser($username, $password, 'fleet');
            $this->model('mailModel')->sendMail($email_address, $username, $password, $cp_name);

            header("Location: " . BASEURL . "/adminFunctions/fleetcenter");

        } else {
            header("Location: " . BASEURL . "/welcome/fleetCenter");
        }
    }




    public function createCommercial()
    {
        if (isset($_POST['username'])) {

            $commercial_code = $_POST['commercial_code'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email_address = $_POST['email_address'];
            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $cp_name = $_POST['cp_name'];
            $cp_number = $_POST['cp_number'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model('insertModel')->addCommercial($commercial_code, $name, $cp_name, $cp_number, $longitude, $latitude, $address, $email_address, $username, $password);
            $this->model('insertModel')->addUser($username, $password, 'commercial');
            $this->model('mailModel')->sendMail($email_address, $username, $password, $cp_name);

            header("Location: " . BASEURL . "/adminFunctions/commercial");

        } else {
            header("Location: " . BASEURL . "/welcome/commercial");
        }
    }









    public function deleteWarehouse($warehouse_code)
    {
        if (isset($warehouse_code)){
            $append = "warehouse_code ='$warehouse_code'";
        }
        else{
            $append = '';
        }

        $this->model('deleteModel')->deleteWarehouse('warehouse',$append);

        
        header("Location: " . BASEURL . "/adminFunctions/viewWarehouse");

        }
    




    public function viewWarehouse()
    {
      $result=$this->model('viewModel')->viewWarehouse();
      $id=$this->model('viewModel')->viewId('warehouse','warehouse_code');

      $data = [
        'inputValue' => "",
        'result' => $result,
        'lastId' => $id,];

        $this->view('admin/warehouse', $data);

   
    }


    public function getWarehouse($wid = null){
        $result=$this->model('viewModel')->viewWarehouse( $wid );
        $json = array();
        while($row = $result->fetch_assoc()){
            $array['warehouse_code'] = $row['warehouse_code'];
            $array['name'] = $row['name'];
            $array['address'] = $row['address'];
            $array['capacity'] = $row['capacity'];
            $array['latitude'] = $row['latitude'];
            $array['longitude'] = $row['longitude'];
            $array['cp_name'] = $row['cp_name'];
            $array['cp_number'] = $row['cp_number'];
            $array['fleet_center'] = $row['fleet_center'];
            $array['email_address'] = $row['email_address'];
            $array['username'] = $row['username'];
            $array['password'] = $row['password'];

            array_push($json, $array);
        }
        $response = json_encode($json);
       
        echo $response;
        
    }

    

                }

               


    



?>