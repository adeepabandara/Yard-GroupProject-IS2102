<?php

class insertModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function userCheck($column,$value)
    {
        $result = $this->get('warehouse', "$column = '$value'");
        return $result;
    }

    public function addCustomer($email_address,$name,$contact_no,$password,$address)
    {
        $this->insert('customer', [
            'email_address' => $email_address,
            'name' => $name,
            'address' => $address,
            'contact_no' => $contact_no,
            'password' => $password,
        ]);
    }

 
    public function addExpenseCategory($category_code, $name, $description)
    {
        $this->insert('expense_category', ['category_code' => $category_code, 'name' => $name, 'description' => $description]);
    }

    public function commercialCheck($column, $value) {
        $result = $this->get('commercial', "$column = '$value'");
        return $result;
    }

    public function addCommercial($name, $username, $password)
    {
        $this->insert('commercial', ['name' => $name, 'username' => $username, 'password' => $password]);
    }


    public function addProduct($product_code, $bar_code, $name, $category, $opening_stock, $reorder_level, $purchase_price, $selling_price)
    {
        $this->insert('product', [
            'product_code' => $product_code, 'bar_code' => $bar_code, 'name' => $name, 'category' => $category,
             'opening_stock' => $opening_stock, 'reorder_level' => $reorder_level, 'purchase_price' => $purchase_price, 'selling_price' => $selling_price,
        ]);
    }

    public function addCategory($product_category_code,  $name, $description)
    {
        $this->insert('product_category', ['product_category_code' => $product_category_code, 'name' => $name, 'description' => $description]);
    }

 

     public function addWarehouse( $warehouse_code,$name,$longitude,$latitude,$cp_name,$cp_number, $address,$email_address,$fleet_center, $capacity,$username,$password)
    {
      $this->insert('warehouse', 
      
      ['warehouse_code'=> $warehouse_code,
      'name'=> $name, 
      'address'=> $address,
      'longitude'=> $longitude,
      'latitude'=> $latitude,
      'cp_name'=> $cp_name,
      'cp_number'=> $cp_number,
      'email_address'=> $email_address,
      'fleet_center'=> $fleet_center,
      'capacity'=> $capacity,
      'username'=> $username,
      'password'=> $password]);
        
   }


    
    public function addVehicle($reg_no, $model, $chassis_no, $engine_no, $color, $category, $mf_year)
    {
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
        $this->insert('vehicle', [
            'reg_no' => $reg_no,
            'chassis_no' => $chassis_no,
            'engine_no' => $engine_no,
            'color' => $color,
            'category' => $category,
            'model' => $model,
            'mf_year'=>$mf_year,


        ]);

    }

   public function addFleetcenter( $fleetcenter_code,$name,$longitude,$latitude,$cp_name,$cp_number, $address,$email_address,$username,$password)
   {
     $this->insert('fleetcenter', 
     
     ['fleetcenter_code'=> $fleetcenter_code,
     'name'=> $name, 
     'address'=> $address,
     'longitude'=> $longitude,
     'latitude'=> $latitude,
     'cp_name'=> $cp_name,
     'cp_number'=> $cp_number,
     'email_address'=> $email_address,
     'username'=> $username,
     'password'=> $password]);
       
  }


    //public function addCategory($vehicle_code, $name,$description)
    
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
       // $this->insert('vehicle_category', ['description' => $description,'vehicle_category_code' => $vehicle_code,'name' => $name,
        //]);

    

  public function addCommercial_User($department_code,$job_position,$employee_id,$nic, $cp_name,$cp_number, $address, $email_address, $username, $password)
   {
     $this->insert('commercial_users', 
     
     ['department_code'=> $department_code,
     'job_position'=> $job_position, 
     'employee_id'=> $employee_id,
     'nic'=> $nic,
     'address'=> $address,
     'cp_name'=> $cp_name,
     'cp_number'=> $cp_number,
     'email_address'=> $email_address,
     'username'=> $username,
     'password'=> $password]);
       
  }


}



