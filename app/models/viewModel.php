<?php

class viewModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }



    public  function search($productName)
    {
        return $this->get('product',$productName);


    }

    public function Warehouse()
    {
        return $this->get('warehouse');
    }

    public function supplier()
    {
        return $this->get('supplier');
    }

    public function viewWarehouse($wid = null)
    {
        if (isset($wid)){
            $append = "warehouse_code ='$wid'";
        }
        else{
            $append = '';
        }
        return $this->get('warehouse',$append);


        }


        public function viewSupplier($sid = null)
        {
            if (isset($sid)){
                $append = "supplier_code ='$sid'";
            }
            else{
                $append = '';
            }
            return $this->get('supplier',$append);
    
    
            }

        public function viewId($table,$where)
        {

        $result=$this->lastId($table,$where);

        return $result;
    
            }
    
            public function viewFleetJob($fjid = null)
            {
                if (isset($fjid)){
                    $append = "fj_code ='$fjid'";
                }
                else{
                    $append = '';
                }
                return $this->get('fleet_job',$append);
        
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


        public function viewVehicle($vid = null)
        {
            if (isset($vid)){
                $append = "id ='$vid'";
            }
            else{
                $append = '';
            }
            return $this->get('vehicle',$append);
    
            }


            public function viewExpenseCat($excatid = null)
            {
                if (isset($excatid)){
                    $append = "id ='$excatid'";
                }
                else{
                    $append = '';
                }
                return $this->get('expense_category',$append);
        
                }



                public function viewExpenseSubCat($exSubCatid = null)
                {
     
             if (isset($exSubCatid)){
                        $append = "category_code ='$exSubCatid'";
                    }
                    else{
                        $append = '';
                    }

                    return $this->get('expense_sub_category',$append);
            
                    }


                    

                    public function viewRequisitionList()
{
                     
                    $table1 = "purchase_requisition";
                    $table2 = "warehouse";
                    $joinOn1 = "purchase_requisition.warehouse_code = warehouse.warehouse_code";
                    $where = "";
                    $order = "";
                    $limit = "";

                    return $this->getjoin($table1, $table2, $joinOn1,$where, $order, $limit);

                

            
                    }

                    public function viewRequisition($prid=null)
                    {    
                        $table1 = "purchase_requisition";
                        $table2 = "requisition_details";
                        $table3 = "warehouse";
                        $joinOn1 = "purchase_requisition.pr_code = requisition_details.pr_code";
                        $joinOn2 = "purchase_requisition.warehouse_code = warehouse.warehouse_code";
                        $where = "purchase_requisition.pr_code='$prid'";
                        $order = "";
                        $limit = "";

                        return $this->getjoin1($table1, $table2, $table3, $joinOn1, $joinOn2, $where, $order, $limit);

                      
                
                    }


                        public function viewRequisitionDetails($prid = null)
                        {
             
                     if (isset($prid)){
                                $append = "pr_code ='$prid'";
                            }
                            else{
                                $append = '';
                            }
        
                            return $this->get('requisition_details',$append);
                    
                            }

                            public function viewRequisitionProducts($prid = null)
                        {
             
                            if (isset($prid)){
                                $append = "pr_code ='$prid'";
                            }
                            else{
                                $append = '';
                            }
        
                            return $this->getjoin('requisition_details','product','requisition_details.product_code=product.product_code');
                    
                            }

                            public function viewPoList()


                            {
                                

                                return $this->get('purchase_order');
                        
                                }
                                public function viewPoListDetails()


                            {
                                $table1 = "purchase_order";
                                $table2 = "supplier";
                                $table3 = "purchase_order_details";
                                $table4 = "purchase_requisition";
                                $table5 = "warehouse";
                             
                       
                                $joinOn1 = "purchase_order.supplier_code = supplier.supplier_code";
                                $joinOn2 = "purchase_order.po_code = purchase_order_details.po_code";
                                $joinOn3 = "purchase_order_details.pr_code = purchase_requisition.pr_code";
                                $joinOn4 = "purchase_requisition.warehouse_code = warehouse.warehouse_code";
                        
                    
                                $where = "";
                                $order = "";
                                $limit = "";

                                return $this->getjoin4($table1, $table2, $table3, $table4, $table5, $joinOn1, $joinOn2, $joinOn3, $joinOn4, $where, $order , $limit);
                        
                                }
                        }

                        


           
    