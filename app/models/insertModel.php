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

    public function addWarehouse($warehouse_code, $name, $address, $email_address, $fleet_center, $capacity, $username, $password)
    {
        $this->insert('warehouse', [
            'warehouse_code' => $warehouse_code, 'name' => $name, 'address' => $address, 'email_address' => $email_address,
            'fleet_center' => $fleet_center, 'capacity' => $capacity, 'username' => $username, 'password' => $password
        ]);
    }

    public function addProduct($product_code, $bar_code, $name, $category, $sub_category, $opening_stock, $reorder_level, $purchase_price, $selling_price, $image)
    {
        $this->insert('product', [
            'product_code' => $product_code, 'bar_code' => $bar_code, 'name' => $name, 'category' => $category,
            'sub_category' => $sub_category, 'opening_stock' => $opening_stock, 'reorder_level' => $reorder_level, 'purchase_price' => $purchase_price, 'selling_price' => $selling_price, 'image' => $image
        ]);
    }

    public function addCategory($product_category_code,  $name, $description)
    {
        $this->insert('product_category', ['product_category_code' => $product_category_code, 'name' => $name, 'description' => $description]);
    }
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


