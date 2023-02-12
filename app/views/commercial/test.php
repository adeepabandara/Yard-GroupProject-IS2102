<?php

echo "<table id='myTable'>";
echo "<tr>";
echo "<th>Item Name</th>";
echo " <th>Description</th>";
echo " <th>Qty</th>";
echo " <th>State</th>";
echo " <th>Vendor</th>";
echo " <th></th>";
echo "</tr>";

    $result = $data['requisitionDetails'];
while ($row = $result->fetch_assoc()) {

    echo "<tr>";
echo "<td>";
 echo "<input  class='header-input-field'   type='text' name='warehouse_code' value=" . $row["product_code"] . "  disabled >";
 echo "</td>";

 echo "<td>";
 echo "<input  class='header-input-field'   type='text' name='warehouse_code' value=" . $row["description"] . "  disabled >";
 echo "</td>";

 echo "<td>";
 echo "<input  class='header-input-field'   type='text' name='warehouse_code' value=" . $row["quantity"] . "  disabled >";
 echo "</td>";


 echo "<td>";
 echo "<input  class='header-input-field'   type='text' name='warehouse_code' value=" . $row["vendor"] . "  >";
 echo "</td>";

 echo "<td>";
 echo "<input  class='header-input-field'   type='text' name='warehouse_code' value=" . $row["vendor"] . "  >";
 echo "</td>";
 echo "</tr>";




}?>



$result = $data['requisitionDetails'];
                                        while ($row = $result->fetch_assoc()) {

                                            echo "<tr>";
                                        echo "<td>";
                                        echo "<input  class='header-input-field'   type='text'  value=" . $row["product_code"] . "  disabled >";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<input  class='header-input-field'   type='text'  value=" . $row["description"] . "  disabled >";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<input  class='header-input-field' name='quantity'  type='text'  value=" . $row["quantity"] . "   >";
                                        echo "</td>";

                                        echo "<td>";


                                        
                                        echo "<select >";

                                        echo "<option>" . $row["supplier_code"] . "</option>";
                                                                                    
                                          $supplier = $data['supplier'];
                                          while ($row = $supplier->fetch_assoc()) {
                                            
                                          echo "<option  value='" . $row['supplier_code'] . "'>" . $row['supplier_code'] . "</option>";
                                                                                        }

                                                                        echo "</select>";













                                                                        
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

      //check weather is there a already created PO for supplier 


          if($result=null){

            //if not create a New PO for Supplier
      
            $this->model('insertModel')->addPo($pr_code,$warehouse_code,$product_code,$description,$quantity,$supplier_code,$detail_id);

          }
          else{

            $result=$this->model('checkdata')->checkPoRecord();

            if($result=null){

              $this->model('insertModel')->addPo();


            }else{
      

            }

            }
          
          header("Location: " . BASEURL . "/commercial/viewPrList");

      } else {
          header("Location: " . BASEURL . "/commercial/dashboard");
      }
  }

  $array['warehouse_code'] = $row['warehouse_code'];
        $array['product_code'] = $row['product_code'];
        $array['description'] = $row['description'];
        $array['quantity'] = $row['quantity'];
