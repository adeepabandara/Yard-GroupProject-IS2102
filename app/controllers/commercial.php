<?php

class commercial extends Controller
{
  public function index()
  {
    $this->view('commercial/dashboard');
  }


  public function commercial()
  {
    $this->view('commercial/dashboard');
  }

  public function customer()
  {
    $this->view('commercial/customer');
  }



  public function expense_record()
  {
    $this->view('commercial/recordexpense');
  }

  public function purchaseOrder()
  {
    
    $products=$this->model('viewModel')->viewRequisitionProducts();
    $reqList=$this->model('viewModel')->viewRequisitionList();
    $supplier=$this->model('viewModel')->viewSupplier();
    $id=$this->model('viewModel')->viewId('purchase_order','po_code');
    $data = [
      'inputValue' => "",
      'requisitionproducts' => $products,
      'requisitionList' => $reqList,
      'supplier' => $supplier,
      'id' => $id,

    ];

    $this->view('commercial/createPO',$data);
  }



//view Purchase Requisition List
  public function viewPrList()
  {
    $result=$this->model('viewModel')->viewRequisitionList();
    $data = [
      'inputValue' => "",
      'requisitionList' => $result,
    ];

      $this->view('commercial/prList', $data);
  }


  //view Purchase Requisition products
  public function viewPrProducts()
  {
    $result=$this->model('viewModel')->viewRequisitionProducts();
    $data = [
      'inputValue' => "",
      'requisitionProducts' => $result,
    ];

      $this->view('commercial/viewPrProducts', $data);
  }





//view Individual Purchase Requisition List
  public function viewPr($prid)
  {
    $result=$this->model('viewModel')->viewRequisition($prid);
    $requisitionDetails=$this->model('viewModel')->viewRequisitionDetails($prid);
    $supplier=$this->model('viewModel')->supplier();
 
    $data = [
      'inputValue' => "",
      'requisition' => $result,
      'requisitionDetails' => $requisitionDetails,
      'supplier' => $supplier,
    ];


      $this->view('commercial/purchaseOrder#pr', $data);
  }


//edit Individual Purchase Requisition List
  public function editPr()
  {
    if (isset($_POST['pr_code'])) {

      $pr_code= $_POST['pr_code'];
      $detail_id= $_POST['id'];
      $created_date = $_POST['created_date'];
      $requested_date = $_POST['requested_date'];
      $warehouse_code= $_POST['warehouse_code'];
      $product_code= $_POST['product_code'];
      $description= $_POST['description'];
      $quantity = $_POST['quantity'];
      $supplier_code = $_POST['supplier_code'];
      


      //update Individual Purchase Requisition with supplier

          $this->model('updateModel')->updatePr($pr_code,$created_date,$requested_date,$warehouse_code,$product_code,$description,$quantity,$supplier_code,$detail_id);

          header("Location: " . BASEURL . "/commercial/viewPrList");

      } else {
          header("Location: " . BASEURL . "/commercial/dashboard");
      }
  }



  public function editPr1()
  {
    if (isset($_POST['pr_code'])) {

      $pr_code= $_POST['pr_code'];
      $created_date = $_POST['created_date'];
      $requested_date = $_POST['requested_date'];
      $warehouse_code= $_POST['warehouse_code'];
      $product_code= $_POST['product_code'];
      $description= $_POST['description'];
      $quantity = $_POST['quantity'];
      $supplier_code = $_POST['supplier_code'];


          $this->model('updateModel')->updatePr($pr_code,$created_date,$requested_date,$warehouse_code,$product_code,$description,$quantity,$supplier_code);

          $this->model('insertModel')->addPo($supplier_code);

            header("Location: " . BASEURL . "/commercial/viewPrList");


          }
          else{

            header("Location: " . BASEURL . "/commercial/dashboard");

   
            }

            }
          
         
     
            public function createPo()
            {
                if (isset($_POST['po_code'])) {
        
                    $po_code= $_POST['po_code'];
                    $created_date = $_POST['created_date'];
                    $requested_date = $_POST['requested_date'];
                    $product_code = $_POST['product_code'];
                    $description= $_POST['description'];
                    $price= $_POST['price'];
                    $quantity= $_POST['quantity'];
                    $supplier_code= $_POST['supplier_code'];
                    $status= $_POST['status'];
                
                   
                    $this->model('insertModel')->addPo(
                        $po_code,
                        $created_date,
                        $requested_date,
                        $product_code,
                        $description,
                        $price,
                        $quantity,
                        $supplier_code,
                        $status,
        
             
                    );
        
                    header("Location: " . BASEURL . "/commercial/dashboard");
        
                } else {
        
                    header("Location: " . BASEURL . "/warehouse/service");
                }
            }


            public function createFleetJob()
            {
                if (isset($_POST['fj_code'])) {
        
                    $fj_code= $_POST['fj_code'];
                    $created_date = $_POST['created_date'];
                    $dispatch_date = $_POST['dispatch_date'];
  
                    $po_code= $_POST['po_code'];

                    $this->model('insertModel')->addFleetJob(
                        $fj_code,
                        $created_date,
                        $dispatch_date,

                        $po_code,

             
                    );
        
                    header("Location: " . BASEURL . "/fleetcenter");
        
                } else {
        
                    header("Location: " . BASEURL . "/fleetcenter/service");
                }
            }























  public function expenseCat()
  {
    $result=$this->model('viewModel')->viewExpenseCat();
    $data = [
      'inputValue' => "",
      'result1' => $result,
    ];

      $this->view('commercial/addexpenseCat', $data);

 
  }





















  public function expenseSubCat()
  {
    $result=$this->model('viewModel')->viewExpenseSubCat();
    $data = [
      'inputValue' => "",
      'result2' => $result,
    ];


    header("Location: " . BASEURL . "/commercial/expenseCat/$data");

    $this->view('commercial/addexpenseCat', $data);

   

 
  }







  





















  public function createExpenseCat()
  {

    if (isset($_POST['category_code'])) {

      $category_code = $_POST['category_code'];
      $name = $_POST['name'];
      $description = $_POST['description'];



        header("Location: " . BASEURL . "/commercial/service");

      $this->model('insertModel')->addExpenseCategory($category_code, $name, $description);

      header("Location: " . BASEURL . "/commercial/expenseCat");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }






  public function createCustomer()
  {



    if (isset($_POST['id'])) {

      $id = $_POST['id'];
      $contact_no = $_POST['contact_no'];
      $name = $_POST['name'];
      $identity_no = $_POST['identity_no'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $gps_location = $_POST['gps_location'];

        header("Location: " . BASEURL . "/commercial/expenseCat");



      $this->model('insertModel')->addCustomer($id, $contact_no, $name, $identity_no, $email, $address, $gps_location);

      header("Location: " . BASEURL . "/commercial/customer");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }

  public function createExpenseRecord()
  {



    if (isset($_POST['expense_entry_no'])) {

      $expense_entry_no = $_POST['expense_entry_no'];
      $date = $_POST['date'];
      $name = $_POST['name'];
      $amount = $_POST['amount'];
      $description = $_POST['description'];
      $add_category = $_POST['add_category'];
      $add_subcategory = $_POST['add_subcategory'];
      $source = $_POST['source'];


      $this->model('insertModel')->addExpenseRecord($expense_entry_no, $date, $name, $amount, $description, $add_category, $add_subcategory, $source);

      header("Location: " . BASEURL . "/commercial/expense_record");
    } else {
      header("Location: " . BASEURL . "/commercial/expensecategory");
    }
  }


  public function getSupplier($sid = null){
    $result=$this->model('viewModel')->viewSupplier( $sid );
    $json = array();
    while($row = $result->fetch_assoc()){
        $array['supplier_code'] = $row['supplier_code'];
        $array['name'] = $row['name'];
        $array['email'] = $row['email'];
        $array['defualt_email_body'] = $row['defualt_email_body'];

        array_push($json, $array);
    }
    $response = json_encode($json);
   
    echo $response;
    
}

}