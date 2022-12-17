<?php

class insertModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userCheck($column, $value)
    {
        $result = $this->get('warehouse', "$column = '$value'");
        return $result;
    }
    public function addWarehouse($warehouse_code, $name, $address, $email_address, $fleet_center, $capacity, $username, $password)
    {
        $this->insert('warehouse', [
            'warehouse_code' => $warehouse_code,
            'name' => $name,
            'address' => $address,
            'email_address' => $email_address,
            'fleet_center' => $fleet_center,
            'capacity' => $capacity,
            'username' => $username,
            'password' => $password
        ]);

    }
    public function addVehicle($reg_no, $model, $chassis_no, $engine_no, $color, $category, $mf_year)
    {
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
        $this->insert('vehicle', [
            'registration_no' => $reg_no,
            'chassie_no' => $chassis_no,
            'engine_no' => $engine_no,
            'color' => $color,
            'vehicle_category' => $category,
            'name' => $model,
            'manufactured_year'=>$mf_year,

        ]);

    }

    public function addCategory($vehicle_code, $name,$description)
    {
        // var_dump($reg_no, $chassis_no, $engine_no, $color, $category);
        // exit();
        $this->insert('vehicle_category', [
            'description' => $description,
            'vehicle_category_code' => $vehicle_code,
            'name' => $name,
        ]);

    }


}