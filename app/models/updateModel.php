<?php

class updateModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function updateWarehouse($warehouse_code, $name, $longitude, $latitude, $cp_name, $cp_number, $address, $email_address, $fleet_center, $capacity, $username, $password)
    {
        $this->update(
            'warehouse',

            [
                'name' => $name,
                'address' => $address,
                'longitude' => $longitude,
                'latitude' => $latitude,
                'cp_name' => $cp_name,
                'cp_number' => $cp_number,
                'email_address' => $email_address,
                'fleet_center' => $fleet_center,
                'capacity' => $capacity,
                'username' => $username,
                'password' => $password
            ]
            
            ,"warehouse_code= '$warehouse_code'"
        );

    }

    public function updatePr($pr_code,$created_date,$requested_date,$warehouse_code,$product_code,$description,$quantity,$supplier_code)

    {

        $this->update('
        purchase_requisition',

            [   'pr_code' => $pr_code,
                'created_date' => $created_date,
                'requested_date' => $requested_date,
                'warehouse_code' => $warehouse_code,
                
            ],"pr_code= '$pr_code'"

        );

        $this->update('
        requisition_details',

            [  
                'pr_code' => $pr_code,
                'product_code' => $product_code,
                'description' => $description,
                'quantity' => $quantity,
                'supplier_code' => $supplier_code,
            ],"pr_code= '$pr_code'"

        );


    }


}