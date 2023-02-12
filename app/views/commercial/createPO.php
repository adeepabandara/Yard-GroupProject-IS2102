<?php

session_start();

// Check if the form has been submitted
if (isset($_POST['add_product'])) {
    // Get the product line data from the form
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    // Create an array to store the product line data
    $product_line = array(
        'product_code' => $product_code,
        'description' => $description,
        'quantity' => $quantity
    );

    if(!isset($_SESSION['product_lines'])) {
        // If it doesn't exist, create it as an array
        $_SESSION['product_lines'] = array();
      
    }

    $_SESSION['product_lines'][] = $product_line;

}

?>



<!DOCTYPE html>

<head>

    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="grid-container">
        <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbspPurchase Requsition</header>



        <div class="sidenav">
            <div class="logo">
                <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center>
            </div>
            <a class="link-on" class="active" href="<?php echo BASEURL ?>/welcome/commercial"><i
                    class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

            <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
                <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-container">
                <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
                <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
            </div>


            <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp
                Customer</a>
            <a class="link" href="<?php echo BASEURL ?>/commercial/createPO"><i class='bx bxs-file'></i>&nbsp Create PO</a>
            <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Purchase
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="link-drop" href="<?php echo BASEURL ?>/commercial/viewPrList">View Requisition</a>
                <a class="link-drop" href="<?php echo BASEURL ?>/commercial/viewPrProducts">View Requisition Details</a>
                <a class="link-drop" href="#">Link 3</a>
            </div>
            <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="link-drop" href="#">Link 1</a>
                <a class="link-drop" href="#">Link 2</a>
                <a class="link-drop" href="#">Link 3</a>
            </div>
            <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="link-drop" href="#">Link 1</a>
                <a class="link-drop" href="#">Link 2</a>
                <a class="link-drop" href="#">Link 3</a>
            </div>
            <a class="link" href="<?php echo BASEURL ?>/home/signout"><i class='bx bxs-left-arrow-square'></i>&nbsp
                Signout</a>
        </div>

        <main class="main">
            <div class="main-cards">
                <div class="card">Create Purchase Order



                    <div class="container">

                        

                        <div>
                            <div>
                                <form action="<?php echo BASEURL ?>/commercial/createPo" method="POST">

                                <table>

                                     <div class="header-fields">
                                    <?php
                                     $row = $data['id']->fetch_assoc();
                                     $last_id = $row['max_id'];
                                     $string = "PO";
                                     
                                     if (!substr($last_id, 0, 2) === $string) {
                                         $last_id = $string . "1";
                                     } else {
                                         $last_id = intval(substr($last_id, 2));
                                         $last_id++;
                                         $last_id = $string . strval($last_id);
                                     }
                                     
                                     $next_id = $last_id;

                                                echo"<input class='disable-input-field' type='text' name='po_code' value=" . $next_id . " required>";
?>
                                            
                                            <div class="header-sub-fields">
                                                <div class="header-input-field">
                                                <label class="header-input-field label">Created Date</label>
                                                <input  class="header-input-field"   type="date" name="created_date"  >
                                              </div>
                                              

                                            <div class="header-input-field">
                                                <label class="header-input-field label">Requested Date</label>
                                                <input class="header-input-field"  name="requested_date" type="date"  onchange="checkDate(this)">
                                            </div>


                                            <div class="header-input-field">
                                                <label class="header-input-field label">Status</label>
                                                <input class="header-input-field" type="text" name="status" value="Draft">
                                            </div>
                                            
                                            

                                            <div class="header-input-field">
                                          
                                            <select name="supplier_code" >
                                            <option > Select Supplier</option>
                                            <?php
                                                $result = $data['supplier'];
                                                while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['supplier_code'] . "'>"  . $row['name'] . "</option>";
                                                }
                                            ?>
                                            </select>
                                           

                                            </div>






                                            <div>
                                            <a class="subBtn" href=#prList>Add from Requsition</a>
                                            </div>


                                            <div class="header-input-field">
                                      
                                           
    <thead>
      <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php

        // Check if the session variable for product lines exists
        if(isset($_SESSION['product_lines'])) {
          // Loop through the product lines in the session variable
          foreach($_SESSION['product_lines'] as $product_line) {
            echo "<tr>";
            echo "<td><input  class='header-input-field' name='product_code' value='{$product_line['product_code']}'></td>";
            echo "<td><input  class='header-input-field' name='description' value='{$product_line['description']}'></td>";
            echo "<td><input  class='header-input-field' name='price' ></td>";
            echo "<td><input  class='header-input-field' name='quantity' value='{$product_line['quantity']}'></td>";
            echo "<td><a class='deleteBtn'>Delete</a></td>";
            echo "</tr>";
            
          }
        }
        
      ?>
    </tbody>
  </table>
  <br>  <br>  <br>  <br>

  <button type='submit'>Release PR</button>

    
    </form>

                                            <!--
                                            <div class="header-input-field">
                                                <label class="input-field label">Status</label>
                                                <input class="status-feild"  class="viewBtn"   name="requested_date" placeholder="Approved" >
                                                
                                            </div>
                                            -->

                                            <div class="header-input-field">


                                            </div>
                                        </div>




                                    </div>

                                    <br><br>


                            </div>


                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
</body>



<script>
    $(document).ready(function () {
        $("#product-select").change(function () {
            var selectedOption = $("#product-select option:selected");
            var productCode = selectedOption.data("code");
            $("#product_code").val(productCode);
        });
    });
</script>




<script>
    function addInputRow() {
        // Get the table element
        var table = document.getElementById("myTable");

        // Create a new row element
        var newRow = table.insertRow();

        // Create the input fields for the new row
        var field1 = document.createElement("input");
        field1.type = "text";
        field1.name = "code";

        var field2 = document.createElement("input");
        field2.type = "text";
        field2.name = "name";

        var field3 = document.createElement("input");
        field3.type = "text";
        field3.name = "description";

        var field4 = document.createElement("input");
        field4.type = "text";
        field4.name = "qty";

        var field5 = document.createElement("status-feild");
        field5.type = "text";
        field5.name = "status";

        // Create new cells
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);

        // Add the input fields to the new cells
        cell1.appendChild(field1);
        cell2.appendChild(field2);
        cell3.appendChild(field3);
        cell4.appendChild(field4);
        cell5.appendChild(field5);
    }
</script>





<script>
    function getDate() {
        var today = new Date();

        document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) +
            '-' + ('0' + today.getDate()).slice(-2);


    }
</script>


<div class="overlay" id="prList">


    <div class="popup-main-cards">
        <div class="popup_card">

            Purchase Requsition List

            <?php

                        $path = BASEURL;

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Warehouse</th>";
                        echo "<th>PR Code</th>";
                        echo "<th>Created_date</th>";
                        echo "<th>Requested_date</th>";
                        echo "<th>Pr_status</th>";
                        echo "<th></th>";
                        while ($row = $data['requisitionList']->fetch_assoc()) {

                          $prc = $row['pr_code'];

                          echo "<tr>";
                          echo "<td>" . $row["name"] . "</td>";
                          echo "<td>" . $row["pr_code"] . "</td>";
                          echo "<td>" . $row["created_date"] . "</td>";
                          echo "<td>" . $row["requested_date"] . "</td>";
                          echo "<td>" . $row["pr_status"] . "</td>";

                          echo "<td><a class='viewBtn' onclick='viewpr(\"$prc\")' href='#pr'> View</a></td>";
                     
                          echo "</tr>";
                        }
                        echo "</table>";
                        ?>

        </div>
    </div>

    <div class="popup_card_fields">


    </div>

</div>


<div class="overlay" id="pr">

    <div class="popup-main-cards">
        <div class="popup_card">
        
            Purchase Requsition List

            <?php
                                        
                                        echo "<div class='header-fields'>";

                                         echo "<input class='disable-input-field' type='text' id='pr_code'  name='pr_code' >";

                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='header-input-field label'>Date</label>";
                                         echo "<input  class='header-input-field'  id='created_date' type='date' name='created_date'  >";
                                         echo "  </div>";
                                         echo "  </div>";



                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='header-input-field label'>Date</label>";
                                         echo "<input  class='header-input-field'  id='requested_date' type='date' name='requested_date'  >";
                                         echo "  </div>";
                                         echo "  </div>";


                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='header-input-field label''>Warehouse</label>";
                                         echo "<input  class='header-input-field' id='warehouse_code'  name='warehouse_code' type='text'>";
                                         echo "  </div>";
                                         echo "  </div>";
                                        


                                        echo "<table id='myTable'>";
                                        echo "<tr>";
                                        echo "<th>Item Name</th>";
                                        echo " <th>Description</th>";
                                        echo " <th>Qty</th>";
                                        echo " <th>Vendor</th>";
                                        echo " <th></th>";
                                        echo " <th></th>";
                                        echo "</tr>";

                                        
                       

                                    echo "<form action='" . BASEURL . "/commercial/purchaseOrder' method='post'>";

                                       echo "<tr>";
                                       echo "<td>";
                                       echo "<input  class='header-input-field'  id='product_code' name='product_code' type='text'  >";
                                       echo "</td>";

                                      

                                       echo "<td>";
                                       echo "<input  class='header-input-field'  id='description' name='description' type='text'   >";
                                       echo "</td>";

                                       echo "<td>";
                                       echo "<input  class='header-input-field'  id='quantity' name='quantity'  type='text'>";
                                       echo "</td>";


                                       echo "<td>";
                                       echo "<td><button type='submit' name='add_product' class='subBtn'>Add</button></td>";
                     
                                       echo "</td>";

                                       echo "<td>";


                         
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "</table>";

                                        echo"<a type='submit' name='add_product' value='Add Product' class='subBtn'>";
                                        echo"<span class='btnText'>Update</span>";
                                       echo " </a>";




                                        ?>






        </div>
    </div>

    <div class="popup_card_fields">


    </div>

</div>

</div>



<script>
      function pomail(supplier_code) {
        var url = '<?php echo "$path/commercial/getSupplier/" ?>' + supplier_code;
        console.log(url);
        fetch(url)
          .then((response) => response.json())
          .then((json) => {
            console.log(json);
            console.log(json[0].supplier_code);
            document.getElementById("supplier_code").value = json[0].supplier_code;
            document.getElementById("name").value = json[0].name;
            document.getElementById("email").value = json[0].email;
            document.getElementById("defualt_email_body").value = json[0].defualt_email_body;

 

          })

      };
    </script>

<script>
  function checkDate(input) {
    var today = new Date();
    var selectedDate = new Date(input.value);

    if (selectedDate < today) {
      alert("You cannot select a date in the past.");
      input.value = "";
    }
  }
</script>

<script>
    function viewpr(pr_code) {
        var url = '<?php echo "$path/warehouse/viewPr/" ?>' + pr_code;
        console.log(url);
        fetch(url)
            .then((response) => response.json())
            .then((json) => {
                console.log(json);
                console.log(json[0].pr_code);
                document.getElementById("pr_code").value = json[0].pr_code;
                document.getElementById("created_date").value = json[0].created_date;
                document.getElementById("requested_date").value = json[0].requested_date;
                document.getElementById("warehouse_code").value = json[0].warehouse_code;

                document.getElementById("product_code").value = json[0].product_code;
                document.getElementById("quantity").value = json[0].quantity;
                document.getElementById("description").value = json[0].description;






            })

    };
</script>

</html>