<?php

class warehouse extends Controller
{
    public function index()
    {
        $this->view('warehouse/dashboard');
    }

    public function product()
    {
        $this->view('warehouse/addProduct');
    }

    public function signup()
    {
        $this->view('warehouse/signup');
    }

    public function createProduct()
    {
        if (isset($_POST['product_code'])) {

            $product_code = $_POST['product_code'];
            $bar_code = $_POST['bar_code'];
            $name = $_POST['name'];
            $category = $_POST['category'];
            $opening_stock = $_POST['opening_stock'];
            $reorder_level = $_POST['reorder_level'];
            $purchase_price = $_POST['purchase_price'];
            $selling_price = $_POST['selling_price'];



            $this->model('insertModel')->addProduct(
                $product_code,
                $bar_code,
                $name,
                $category,
                $opening_stock,
                $reorder_level,
                $purchase_price,
                $selling_price,
               
            );
            header("Location: " . BASEURL . "/warehouse/product");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
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



    public function createCategory()
    {
        if (isset($_POST['product_category_code'])) {

            $product_category_code = $_POST['product_category_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];
 
            $this->model('insertModel')->addCategory(
                $product_category_code,
                $name,
                $description,

            );
            header("Location: " . BASEURL . "/warehouse/product");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }


}
