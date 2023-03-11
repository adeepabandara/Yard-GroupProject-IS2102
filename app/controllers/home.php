<?php

session_start();
// var_dump('test');
// exit();

if (isset($_SESSION['email_address'])) {

  
   
}
 else {

  }

class Home extends Controller
{
    public function index() 
    {
        $result=$this->model('viewModel')->viewProduct();

        $data = [
            'inputValue' => "",
            'result' => $result,

        ];
        $this->view('home/index',$data);
    }
    
    public function welcome() 
    {

    }

    public function getProduct($id=null){
        $result=$this->model('viewModel')->viewProduct($id);
        $json = array();
        while($row = $result->fetch_assoc()){
            $array['product_code'] = $row['product_code'];
            $array['name'] = $row['name'];

            array_push($json, $array);
        }
        $response = json_encode($json);
       
        echo $response;
        
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



    public function addToCart() {
        if (isset($_POST['quantity'])) {
            $product_code = $_POST['product_code'];
            $quantity = $_POST['quantity'];
            $name = $_POST['name'];
    
            // Retrieve the current user's shopping cart from the session
            $cart = $_SESSION['cart'] ?? array();
    
            // Get the batches and prices of the product
            $batches = $this->model('viewModel')->viewBatch($product_code, $quantity);
    
            // Add each batch and its price to the cart
            foreach ($batches as $batch) {
                $batch_id = $batch['batch_id'];
                $batch_quantity = $batch['quantity'];
                $selling_price = $batch['selling_price'];
                $sub_total = $batch['selling_price'] * $batch_quantity;
    
                // Check if the batch is already in the cart
                if (isset($cart[$product_code][$batch_id])) {
                    // Update the quantity of the batch in the cart
                    $cart[$product_code][$batch_id]['quantity'] += $batch_quantity;
                    $cart[$product_code][$batch_id]['selling_price'] += $selling_price;
                    $cart[$product_code][$batch_id]['sub_total'] += $sub_total;
                } else {
                    // Add the batch and its quantity and price to the cart
                    $cart[$product_code][$batch_id] = array(
                        'quantity' => $batch_quantity,
                        'selling_price' => $selling_price,
                        'sub_total' => $sub_total,
                        'name' => $name
                    );
                }
            }
    
            // Store the updated cart information in the session
            $_SESSION['cart'] = $cart;
    
            // Redirect the user back to the product detail page
            header('Location: '.BASEURL.'/home/welcome1');
        } else {
            header('Location: '.BASEURL.'/home/welcome');
        }
    }
    
      


    public function signout()
    {
        session_start();
        session_destroy();
        unset($_SESSION['email_address']);
        header('Location: '.BASEURL.'/home');
    }
    

}
?>