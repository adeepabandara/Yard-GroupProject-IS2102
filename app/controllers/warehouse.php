<?php

class warehouse extends Controller
{
    public function index()
    {
        $this->view('warehouse/dashboard');
    }

    public function category()
    {
        $this->view('warehouse/addCategory');
    }

    public function brand()
    {
        $this->view('warehouse/addBrand');

    }


    public function grn()
    {
        $this->view('warehouse/grn');

    }

  
//create Purchase Requistion Loading
    public function purchaseRequisition()
    {
      $result=$this->model('viewModel')->viewProduct();
      $newdata=$this->model('viewModel')->Warehouse();
      $id=$this->model('viewModel')->viewId('purchase_requisition','pr_code');

      $data = [
        'inputValue' => "",
        'result' => $result,
        'newdata' => $newdata,
        'id' => $id,
    ];

        $this->view('warehouse/createPr', $data);

   
    }


    public function prList()
    {
        $this->view('warehouse/prList');

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

    public function createCategory1()
    {
        if (isset($_POST['product_category_code'])) {

            $product_category_code = $_POST['product_category_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];
 
            $this->model('insertModel')->addCategory1(
                $product_category_code,
                $name,
                $description,

            );
            header("Location: " . BASEURL . "/warehouse/category");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

        public function createSubCategory()
    {
        if (isset($_POST['product_sub_category_code'])) {

            $category = $_POST['category'];
            $product_sub_category_code = $_POST['product_sub_category_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];
 
            $this->model('insertModel')->addSubCategory(
                $category,
                $product_sub_category_code,
                $name,
                $description,

            );
            header("Location: " . BASEURL . "/warehouse/category");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

    public function createBrand()
    {
        if (isset($_POST['brand_code'])) {

            $brand_code = $_POST['brand_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];
 
            $this->model('insertModel')->addBrand(
                $brand_code,
                $name,
                $description,

            );
            header("Location: " . BASEURL . "/warehouse/brand");
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }




    //view add product interface and product details on the table in the same page
    public function product()
    {
      $result=$this->model('viewModel')->viewProduct();

      $data = [
        'inputValue' => "",
        'result' => $result, ];

        $this->view('warehouse/addProduct', $data);

   
    }

    //Controller for adding product to the database
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

    public function createPr()
    {
        if (isset($_POST['pr_code'])) {

            $pr_code= $_POST['pr_code'];
            $created_date = $_POST['created_date'];
            $requested_date = $_POST['requested_date'];
            $warehouse_code= $_POST['warehouse_code'];
            $product_code = $_POST['product_code'];
            $description= $_POST['description'];
            $quantity= $_POST['quantity'];
        
           
            $this->model('insertModel')->addPr(
                $pr_code,
                $created_date,
                $requested_date,
                $warehouse_code,
                $product_code,
                $description,
                $quantity

     
            );

            header("Location: " . BASEURL . "/warehouse/purchaseRequisition");

        } else {

            header("Location: " . BASEURL . "/warehouse/service");
        }
    }


  //Controller for viewing product data on pop up modal
    public function getProduct($pid = null){
        $result=$this->model('viewModel')->viewProduct( $pid );
        $json = array();
        while($row = $result->fetch_assoc()){
            $array['product_code'] = $row['product_code'];
            $array['name'] = $row['name'];
            $array['bar_code'] = $row['bar_code'];
            $array['category'] = $row['category'];
            $array['opening_stock'] = $row['opening_stock'];
            $array['reorder_level'] = $row['reorder_level'];
            $array['purchase_price'] = $row['purchase_price'];
            $array['selling_price'] = $row['selling_price'];
            array_push($json, $array);
        }
        $response = json_encode($json);
       
        echo $response;
        
    }


    public function deleteProduct($product_code)
    {
        if (isset($product_code)) {
            $this->model('deleteModel')->deleteProduct($product_code);
            header("Location: " . BASEURL . "/warehouse/product");

        }
    }


    public function search() {
        // Get the product name from the query parameters, or an empty string if it's not present
        $productName = isset($_GET['name']) ? $_GET['name'] : '';
    
        // Call the search method on the Product model and pass the product name as an argument
        $this->model('viewModel')->search($productName);

    
        // Include the search view
        include 'views/warehouse/createPR.php';
      }





  public function viewPr($prid=null){


    $result=$this->model('viewModel')->viewRequisition($prid);

    $json = array();
    while($row = $result->fetch_assoc()){

        $array['pr_code'] = $row['pr_code'];
        $array['created_date'] = $row['created_date'];
        $array['requested_date'] = $row['requested_date'];
        $array['warehouse_code'] = $row['warehouse_code'];
        $array['product_code'] = $row['product_code'];
        $array['description'] = $row['description'];
        $array['quantity'] = $row['quantity'];

        array_push($json, $array);
    }
    $response = json_encode($json);
   
    echo $response;
    
}




}
