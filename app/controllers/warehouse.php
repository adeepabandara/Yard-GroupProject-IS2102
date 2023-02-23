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

    public function category()
    {
        $result=$this->model('viewModel')->viewCategory();
        $resultSubCat=$this->model('viewModel')->viewSubCategory();

      $data = [
        'inputValue' => "",
        'result' => $result, 
        'resultSubCat' => $resultSubCat, 
    ];

        $this->view('warehouse/addCategory', $data);
        
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

    public function deleteCategory($product_category_code)
    {
        if (isset($product_category_code)){
            $append = "product_category_code ='$product_category_code'";
        }
        else{
            $append = '';
        }

        $this->model('deleteModel')->deleteCategory('product_category',$append);

        
        header("Location: " . BASEURL . "/warehouse/category");

        }

        public function editCategory()
        {
            if (isset($_POST['product_category_code'])) {
    
                $product_category_code = $_POST['product_category_code'];
                $name = $_POST['name'];
                $description = $_POST['description'];
    
                $this->model('updateModel')->updateCategory($product_category_code, $name, $description);
             
    
    
                header("Location: " . BASEURL . "/warehouse/category");
    
            } else {
                header("Location: " . BASEURL . "/warehouse/service");
            }
        }
    
        public function getCategory($cid = null){
            $result=$this->model('viewModel')->viewCategory( $cid );
            $json = array();
            while($row = $result->fetch_assoc()){
                $array['product_category_code'] = $row['product_category_code'];
                $array['name'] = $row['name'];
                $array['description'] = $row['description'];
    
                array_push($json, $array);
            }
            $response = json_encode($json);
           
            echo $response;
            
        }

        public function subCategory()
        {
            $result=$this->model('viewModel')->viewSubCategory();
    
          $data = [
            'inputValue' => "",
            'result' => $result, ];
    
            $this->view('warehouse/addCategory', $data);
            
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

        public function deleteSubCategory($product_sub_category_code)
        {
            if (isset($product_sub_category_code)){
                $append = "product_sub_category_code ='$product_sub_category_code'";
            }
            else{
                $append = '';
            }
    
            $this->model('deleteModel')->deleteSubCategory('product_sub_category',$append);
    
            
            header("Location: " . BASEURL . "/warehouse/category");
    
            }

            public function editSubCategory()
            {
                if (isset($_POST['product_sub_category_code'])) {
        
                    $category = $_POST['category'];
                    $product_sub_category_code = $_POST['product_sub_category_code'];
                    $name = $_POST['name'];
                    $description = $_POST['description'];
        
                    $this->model('updateModel')->updateCategory($category,$product_sub_category_code, $name, $description);
                 
        
        
                    header("Location: " . BASEURL . "/warehouse/subCategory");
        
                } else {
                    header("Location: " . BASEURL . "/warehouse/service");
                }
            }
        
            public function getSubCategory($scid = null){
                $result=$this->model('viewModel')->viewSubCategory( $scid );
                $json = array();
                while($row = $result->fetch_assoc()){
                    $array['category'] = $row['category'];
                    $array['product_sub_category_code'] = $row['product_sub_category_code'];
                    $array['name'] = $row['name'];
                    $array['description'] = $row['description'];
        
                    array_push($json, $array);
                }
                $response = json_encode($json);
               
                echo $response;
                
            }

    //view add brand interface and brand details on the table in the same page
    public function brand()
    {
      $result=$this->model('viewModel')->viewBrand();

      $data = [
        'inputValue' => "",
        'result' => $result, ];

        $this->view('warehouse/addBrand', $data);

   
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

    public function editBrand()
    {
        if (isset($_POST['brand_code'])) {

            $brand_code = $_POST['brand_code'];
            $name = $_POST['name'];
            $description = $_POST['description'];

            $this->model('updateModel')->updateBrand($brand_code, $name, $description);
         


            header("Location: " . BASEURL . "/warehouse/brand");

        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

    public function getBrand($bid = null){
        $result=$this->model('viewModel')->viewBrand( $bid );
        $json = array();
        while($row = $result->fetch_assoc()){
            $array['brand_code'] = $row['brand_code'];
            $array['name'] = $row['name'];
            $array['description'] = $row['description'];

            array_push($json, $array);
        }
        $response = json_encode($json);
       
        echo $response;
        
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

<<<<<<< Updated upstream
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
=======


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

>>>>>>> Stashed changes
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

<<<<<<< Updated upstream
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
=======
    public function editProduct()
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

            $this->model('updateModel')->updateProduct(
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

>>>>>>> Stashed changes
        } else {
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }

<<<<<<< Updated upstream
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
=======
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

>>>>>>> Stashed changes
            header("Location: " . BASEURL . "/warehouse/service");
        }
    }


<<<<<<< Updated upstream
=======
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
        if (isset($product_code)){
            $append = "product_code ='$product_code'";
        }
        else{
            $append = '';
        }

        $this->model('deleteModel')->deleteProduct('product',$append);

        
        header("Location: " . BASEURL . "/warehouse/product");

        }

    public function deleteBrand($brand_code)
    {
        if (isset($brand_code)){
            $append = "brand_code ='$brand_code'";
        }
        else{
            $append = '';
        }

        $this->model('deleteModel')->deleteBrand('brand',$append);

        
        header("Location: " . BASEURL . "/warehouse/brand");

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



>>>>>>> Stashed changes

}
