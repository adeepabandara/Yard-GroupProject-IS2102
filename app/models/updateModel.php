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

    public function updateBrand($brand_code, $name, $description)
    {
        $this->update(
            'brand',

            [
                'brand_code' => $brand_code,
                'name' => $name,
                'description' => $description,
            ]
            
            ,"brand_code= '$brand_code'"
        );

    }

    public function updateProduct(
        $product_code,
        $bar_code,
        $name,
        $category,
        $opening_stock,
        $reorder_level,
        $purchase_price,
        $selling_price,
       
    )
    {
        $this->update(
            'product',

            [
                'product_code' => $product_code,
                'bar_code' => $bar_code,
                'name' => $name,
                'category' => $category,
                'opening_stock'=> $opening_stock,
                'reorder_level' => $reorder_level,
                'purchase_price' => $purchase_price,
                'selling_price' => $selling_price,
            ]
            
            ,"product_code= '$product_code'"
        );

    }

    public function updateCategory($product_category_code, $name, $description)
    {
        $this->update(
            'product_category',

            [
                'product_category_code' => $product_category_code,
                'name' => $name,
                'description' => $description,
            ]
            
            ,"product_category_code= '$product_category_code'"
        );

    }

    public function updateSubCategory($category,$product_sub_category_code, $name, $description)
    {
        $this->update(
            'product_category',

            [
                'category' => $category,
                'product_sub_category_code' => $product_sub_category_code,
                'name' => $name,
                'description' => $description,
            ]
            
            ,"product_sub_category_code= '$product_sub_category_code'"
        );

    }

}