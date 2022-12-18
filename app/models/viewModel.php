<?php

class viewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function viewWarehouse($warehouse_code)
    {
        $link= $this->get('warehouse',"warehouse_code = $warehouse_code");

        }
    }

