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


 
    public function addExpenseCategory($category_code, $name, $description)
    {
        $this->insert('expense_category', ['category_code' => $category_code, 'name' => $name, 'description' => $description]);
    }

    public function commercialCheck($column, $value) {
        $result = $this->get('commercial', "$column = '$value'");
        return $result;
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

    public function addCategory1($product_category_code,  $name, $description)
    {
        $this->insert('product_category', ['product_category_code' => $product_category_code, 'name' => $name, 'description' => $description]);
        
    }

    public function addSubCategory($category, $product_sub_category_code,  $name, $description)
    {
        $this->insert('product_sub_category', ['product_sub_category_code' => $product_sub_category_code, 'category' => $category, 'name' => $name, 'description' => $description]);
        
    }

    public function addBrand($brand_code,  $name, $description)
    {
        $this->insert('brand', ['brand_code' => $brand_code, 'name' => $name, 'description' => $description]);

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

      'password'=> $password]); 

        
   }

   public function addUser($username,$password,$user_type)
   {
     $this->insert('users', 
     
     ['username'=> $username,
     'password'=> $password,
     'user_type'=> $user_type]);
       
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


   public function addFleetcenter( $fleetcenter_code,$name,$longitude,$latitude,$cp_name,$cp_number, $address,$email_address,$username,$password)

      'password'=> $password]); 
        
   }

   public function addUser($username,$password,$user_type)
   {
     $this->insert('users', 
     
     ['username'=> $username,
     'password'=> $password,
     'user_type'=> $user_type]);
       
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

   public function addFleetCenter( $fleetcenter_code,$name,$longitude,$latitude,$cp_name,$cp_number, $address,$email_address,$username,$password)

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



  public function addCommercial_User($department_code,$job_position,$employee_id,$nic, $cp_name,$cp_number, $address, $email_address, $username, $password)

    //public function addCategory($vehicle_code, $name,$description)
    
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
       // $this->insert('vehicle_category', ['description' => $description,'vehicle_category_code' => $vehicle_code,'name' => $name,
        //]);

    public function addVehicleCategory($vehicle_category_code, $name, $description)
    {

        // var_dump($vehicle_category_code, $name, $description);
        // exit();
        $this->insert('vehicle_category', [
            'description' => $description,
            'vehicle_category_code' => $vehicle_category_code,
            'name' => $name,
        ]);
    }

    public function addDriver($driverId, $name, $nic, $contactNo, $address, $eAddress, $uName, $password)
    {

        // var_dump($vehicle_category_code, $name, $description);
        // exit();
        $this->insert('driver', [
            'driverId' => $driverId,
           'name' => $name,
           'nic' => $nic,
           'contactNo' => $contactNo,
           'address' => $address,
           'eAddress' => $eAddress,
           'uName' => $uName,
           'password' => $password,
        ]);
    }

    public function addFuelStation($stationId, $name, $address, $location, $creditLimit, $contactPerson, $contactNo)
    {

        // var_dump($vehicle_category_code, $name, $description);
        // exit();
        $this->insert('fuelstation', [
            'stationId' => $stationId,
           'name' => $name,
           'address' => $address,
           'location' => $location,
           'creditLimit' => $creditLimit,
           'contactPerson' => $contactPerson,
           'contactNo' => $contactNo,
        ]);
    }

    

 public function addCommercial($commercial_code,$name, $cp_name,$cp_number,$longitude,$latitude, $address, $email_address, $username, $password)

   {
     $this->insert('commercial', 
     
     ['commercial_code'=> $commercial_code,
     'name'=> $name, 
     'address'=> $address,

    //public function addCategory($vehicle_code, $name,$description)
    
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
       // $this->insert('vehicle_category', ['description' => $description,'vehicle_category_code' => $vehicle_code,'name' => $name,
        //]);

    

 public function addCommercial($commercial_code,$name, $cp_name,$cp_number,$longitude,$latitude, $address, $email_address, $username, $password)
   {
     $this->insert('commercial', 
     
     ['commercial_code'=> $commercial_code,
     'name'=> $name, 
     'address'=> $address,
     'longitude'=> $longitude,
     'latitude'=> $latitude,
     'longitude'=> $longitude,
     'latitude'=> $latitude,
     'cp_name'=> $cp_name,
     'cp_number'=> $cp_number,
     'email_address'=> $email_address,
     'username'=> $username,
     'password'=> $password]);
       
  }


}



