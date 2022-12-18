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
            'warehouse_code' => $warehouse_code, 'name' => $name, 'address' => $address, 'email_address' => $email_address,
            'fleet_center' => $fleet_center, 'capacity' => $capacity, 'username' => $username, 'password' => $password
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
}
