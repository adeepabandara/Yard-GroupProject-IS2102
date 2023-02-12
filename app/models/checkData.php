<?php

class checkData extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function checkPo($supid = null)
    {
        if (isset($supid)){
            $append = "supplier_code ='$supid'";
        }
        else{
            $append = '';
        }
       return $this->checkData('purchase_order',$append);

        }

        public function checkPoRecord($prDetailsID = null)
        {
            if (isset($prDetailsID)){
                $append = "prDetailsID ='$prDetailsID'";
            }
            else{
                $append = '';
            }
           $this->checkData('purchase_order',$append);

            }







}