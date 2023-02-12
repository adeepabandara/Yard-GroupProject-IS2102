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


      <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customer</a>
      <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Requistions</a>
      <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Purchase
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a class="link-drop" href="<?php echo BASEURL ?>/commercial/viewPrList">View Requisition</a>
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
        <div class="card">Create Purchase Requsition



          <div class="container">

            <div>
              <div>
                <form action="<?php echo BASEURL ?>/commercial/editPr1" method="post">

                  <?php
                                                $result = $data['requisition'];
                                     while ($row = $result->fetch_assoc()) {

                                         echo "<div class='header-fields'>";

                                         echo "<input class='disable-input-field' type='text' id='pr_code'  name='pr_code' value=" . $row["pr_code"] . " >";

                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='input-field label'>Date</label>";
                                         echo "<input  class='header-input-field'   type='date' name='created_date' value=" . $row["created_date"] . "  >";
                                         echo "  </div>";
                                         echo "  </div>";



                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='input-field label'>Date</label>";
                                         echo "<input  class='header-input-field'   type='date' name='requested_date' value=" . $row["requested_date"] . " >";
                                         echo "  </div>";
                                         echo "  </div>";


                                         echo " <div class='header-sub-fields'>";
                                         echo " <div class='header-input-field'>";
                                         echo " <label class='input-field label'>Warehouse</label>";
                                         echo "<input  class='header-input-field'  name='warehouse_code' type='text'  value=" . $row["warehouse_code"] . "  >";
                                         echo "  </div>";
                                         echo "  </div>";
                                        }


                                        echo "<table id='myTable'>";
                                        echo "<tr>";
                                        echo "<th>Item Name</th>";
                                        echo " <th>Description</th>";
                                        echo " <th>Qty</th>";
                                        echo " <th>Vendor</th>";
                                        echo " <th></th>";
                                        echo " <th></th>";
                                        echo "</tr>";

                                        
                                        $result = $data['requisitionDetails'];
                                     while ($row = $result->fetch_assoc()) {

                                      echo "<tr>";
                                      echo "<td>";
                                      echo "<input  class='header-input-field'  name='id' type='text'  value=" . $row["id"] . " >";
                                      echo "</td>";

                                       echo "<tr>";
                                       echo "<td>";
                                       echo "<input  class='header-input-field'  name='product_code' type='text'  value=" . $row["product_code"] . " >";
                                       echo "</td>";

                                      

                                       echo "<td>";
                                       echo "<input  class='header-input-field'  name='description' type='text'  value=" . $row["description"] . " >";
                                       echo "</td>";

                                       echo "<td>";
                                       echo "<input  class='header-input-field' name='quantity'  type='text'  value=" . $row["quantity"] . "  >";
                                       echo "</td>";

                                       echo "<td>";


                                     
                                     echo "<select name='supplier_code'>";
                                     echo "<option>" . $row["supplier_code"] . "</option>";

                                    }
                        
                                       $supplier = $data['supplier'];
                                       while ($row = $supplier->fetch_assoc()) { 
                                       echo "<option   value='" . $row['supplier_code']. " '>" . $row['supplier_code'] . "</option>";
                                                                                     }

                                     echo "</select>";

                                        echo "</td>";
                                        echo "</tr>";
                                        echo "</table>";

                                        echo"<button class='subBtn' type='submit'>";
                                        echo"<span class='btnText'>Update</span>";
                                       echo " </button>";




                                        ?>



                  <button class="closeBtn" type="submit">Save</button>
                </form>














              </div>
              </form>

            </div>
          </div>
        </div>
    </main>
</body>

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
  function searchFunction() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "createPR.php?name=" + document.getElementById("name").value, true);
    xhr.onreadystatechange = function () {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        document.getElementById("result").innerHTML = this.responseText;
      }
    };
    xhr.send();
  }
</script>

<script>
  function getDate() {
    var today = new Date();

    document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' +
      ('0' + today.getDate()).slice(-2);


  }
</script>

</html>