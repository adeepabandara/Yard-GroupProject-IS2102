
<!DOCTYPE html>
    <head>
        
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <div class="grid-container">
            <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbspPurchase Requsition</header>
            

  <div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link" class="active" href="<?php echo BASEURL ?>/welcome/warehouse"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Product
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/Product">Add Product</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/category">Category</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/brand">Brand</a>
  </div>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Purchase Requsition
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container-on">
    <a class="link-drop-on" href="<?php echo BASEURL ?>/warehouse/createPr">Create PR</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/prList">View PR</a>
  </div>


  <a class="link" href="<?php echo BASEURL ?>/warehouse/grn"><i class='bx bxs-truck'></i>&nbsp GRN</a>
  <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Requistions</a>
  <button class="dropdown-btn"><i class='bx bxs-file' ></i>&nbsp Reports
    <i class="fa fa-caret-down"></i>
  </button>
  <div  class="dropdown-container">
    <a class="link-drop" href="#">Daily Sales Report</a>
    <a class="link-drop" href="#">Link 2</a>
    <a class="link-drop" href="#">Link 3</a>
  </div>
  <button class="dropdown-btn"><i class='bx bxs-file' ></i>&nbsp Reports
    <i class="fa fa-caret-down"></i>
  </button>
  <div  class="dropdown-container">
    <a class="link-drop" href="#">Link 1</a>
    <a class="link-drop" href="#">Link 2</a>
    <a class="link-drop" href="#">Link 3</a>
  </div>
  <button class="dropdown-btn"><i class='bx bxs-file' ></i>&nbsp Reports
    <i class="fa fa-caret-down"></i>
  </button>
  <div  class="dropdown-container">
    <a class="link-drop" href="#">Link 1</a>
    <a class="link-drop" href="#">Link 2</a>
    <a class="link-drop" href="#">Link 3</a>
  </div>
  <a class="link" href="<?php echo BASEURL ?>/home/signout"><i class='bx bxs-left-arrow-square'></i>&nbsp Signout</a>
</div>

            <main class="main">
                <div class="main-cards">
                    <div class="card">Create Purchase Requsition 

                    
                        
                        <div class="container">
                           
                                <div>
                                    <div>
                                     <form  action="<?php echo BASEURL ?>/warehouse/createPr" method="POST">

                                        <div class="header-fields">
                                          <?php

                                            $row = $data['id']->fetch_assoc();
                                            $last_id = $row['max_id'];
                                            $string = "PR";

                                            if (!substr($last_id, 0, 2) === $string) {
                                                $last_id = $string . "1";
                                            } else {
                                                $last_id = intval(substr($last_id, 2));
                                                $last_id++;
                                                $last_id = $string . strval($last_id);
                                            }

                                            $next_id = $last_id;

                                          echo "<input class='disable-input-field' type='text' id='pr_code' name='pr_code' value=" . $next_id . " required>";

                                            ?>
                                            <div class="header-sub-fields">
                                                <div class="header-input-field">
                                                <label class="header-input-field label">Created Date</label>
                                                <input  class="header-input-field"   type="date" name="created_date"  >
                                              </div>
                                              

                                            <div class="header-input-field">
                                                <label class="header-input-field label">Requested Date</label>
                                                <input class="header-input-field" id="requested_date" name="requested_date" type="date" onchange="checkDate(this)">

                                            </div>


                                            <div class="header-input-field">
                                            <label class="header-input-field label">Warehouse</label>
                                            <select  name="warehouse_code">
                                            <option value=""> Select Warehouse</option>
                                                <?php
                                            
                                                while ($row = $data['newdata']->fetch_assoc()) {
                                                    echo "<option data-code='" . $row['warehouse_code'] . "' value='" . $row['warehouse_code'] . "'>" . $row['name'] . "</option>";
                                                }
                                                ?> 
                                            </select>
                                            </div>
                                                    <!--
                                            <div class="header-input-field">
                                                <label class="input-field label">Status</label>
                                                <input class="status-feild"  class="viewBtn"   name="requested_date" placeholder="Approved" >
                                                
                                            </div>
                                            -->

                                            <div class="header-input-field">
                                           
                                    
                                            </div>
                                        </div>
                                        
                                        
                                        <table id="myTable">
                                            <tr>
                                                <th>Item Name</th>
                                         
                                            
                                                <th>Description</th>
                                                <th>Qty</th>
                                                <th>State</th>
                                                <th></th>
                                                <th></th>
                                            </tr>


                                            <tr>
                                            
                                            <td>
                                            <select name="product_code" >
                                            <option value=""> Select Product</option>
                                            <?php
                                                $result = $data['result'];
                                                while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['product_code'] . "'>" . $row['name'] . "</option>";
                                                }
                                            ?>
                                            </select>
                                            
                                            <td><input class="input-field-description" type="text"  name="description" placeholder="Type Here..." ></td>
                                            <td><input class="input-field" type="text" name="quantity" placeholder="Type Here..." ></td>
                                          
                                            <td><a class="deleteBtn">Delete</a></td>
                                            </tr>




                                            


                                        </table>

                                        <br><br>

                                        <button type="button" id="submit-button" class="add-button-fullwidth" onclick="addInputRow()">Add Product +</button>



                                    </div>

                                    <br><br>

                                    <div class="button-row">
                                                
                                            <a class="deleteBtn">Cancel</a>
    
                                    
                                            <a class="closeBtn">Draft</a>
                                       
                                            <button class="subBtn" type="submit">Create PR</button>
                                        </div>
                                    </div>


                                </div>
                                            </form>

                        </div>
                    </div>
                </div>
            </main>
    </body>

    

<script>
  $(document).ready(function() {
    $("#product-select").change(function() {
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

function searchFunction() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "createPR.php?name=" + document.getElementById("name").value, true);
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhr.send();
}

</script>

<script>

//past date restriction
function getDate(){
    var today = new Date();

document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}

    </script>

</html>


