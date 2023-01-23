<?php

class deleteModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function deleteWarehouse($warehouse_code)
    {
        $link= $this->delete('warehouse',"warehouse_code = $warehouse_code");

        }
    }

