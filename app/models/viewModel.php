<?php

class viewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

<<<<<<< Updated upstream
    public function viewWarehouse($warehouse_code)
    {
        $link= $this->get('warehouse',"warehouse_code = $warehouse_code");
=======
    public function viewWarehouse($wid = null)
    {
        if (isset($wid)){
            $append = "warehouse_code ='$wid'";
        }
        else{
            $append = '';
        }
        return $this->get('warehouse',$append);
>>>>>>> Stashed changes

        }
    }

