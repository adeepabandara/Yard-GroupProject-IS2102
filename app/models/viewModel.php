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


        public function viewProduct($pid = null)
        {
            if (isset($pid)){
                $append = "product_code ='$pid'";
            }
            else{
                $append = '';
            }
            return $this->get('product',$append);
    
            }

            public function viewBatch($product_code, $quantity)
            {
              
                return $this->getBatchPrice($product_code, $quantity);
        
                }
        
    


    }

