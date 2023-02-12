<?php

class deleteModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteWarehouse($table,$where)
    {
        $this->delete($table,$where);

        }
    
    public function deleteVehicle($id)
    {
        $link= $this->delete('vehicle',"id = $id");

        }
    
    public function deleteProduct($product_code)
    {
        $link= $this->delete('product',"product_code = $product_code");

        }
    }
