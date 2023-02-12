<?php


// Check if the form has been submitted
if (isset($_POST['add_product'])) {
    // Get the product line data from the form
    $po_code = $_POST['po_code'];


    // Create an array to store the product line data
    $product_line = array(
        'po_code' => $po_code,
    );

    if(!isset($_SESSION['product_lines'])) {
        // If it doesn't exist, create it as an array
        $_SESSION['product_lines'] = array();
      
    }

    $_SESSION['product_lines'][] = $product_line;

}

?>



<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">

  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">




</header>

<!--sidebar-->

<div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link-on"  href="<?php echo BASEURL ?>/welcome/fleet"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Vehicle
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/category">Category</a>

  </div>

  <a class="link" href="<?php echo BASEURL ?>/fleetcenter/createFleetJob"><i class='bx bxs-coin'></i>&nbsp Create Fleet Job</a>
  <a class="link" href="<?php echo BASEURL ?>/fleetcenter/driver"><i class='bx bxs-truck'></i>&nbsp Drivers</a>
  <a class="link" href="<?php echo BASEURL ?>/fleetcenter/fuel"><i class='bx bxs-coin'></i>&nbsp Fuel Station</a>
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
                    <div class="card">Create Fleet Jobs
                        
                        <div class="container">
                            <form>
                                <div>
                                    <div>
                                     <form>
                                        <div class="header-fields">

                                            <input class="disable-input-field"type="text" id="code" name="code" placeholder="FJ004" >

                                            <div class="header-sub-fields">
                                                
                                                <div class="header-input-field">
                                                <label class="input-field label">Date</label>
                                                <input  class="header-input-field"  type="date" name="date" placeholder="Type Here..." >
                                              </div>

                                            <div class="header-input-field">
                                                <label class="input-field label">Warehouse</label>
                                                <input class="header-input-field" type="text" name="warehouse" placeholder="Type Here..." >
                                            </div>

                                            <div class="header-input-field">
                                                <label class="input-field label">Assigned Vehicle</label>
                                                <input class="header-input-field" type="text" name="warehouse" placeholder="Type Here..." >
                                            </div>
                                            <div class="header-input-field">
                                                <label class="input-field label">Dispatched Date</label>
                                                <input class="header-input-field" type="text" name="warehouse" placeholder="Type Here..." >
                                            </div>

                                            </form>

      
               
                </div>
                    
                    
                                    <button class="add-button-fullwidth" > Customer Orders +</button>
                                   
                                </div>
                                
                                  
                            <!-- </div> -->
                            <br><br>
                            <table id="myTable">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Customer</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                   
                                       
                                </tr>
                               
                            </table>

                            <br><br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br><br>
                            <br>
                            <br>
                            <br>
                            <br>
                           
                            
                            

                            <b>Purchase Orders</b>
                    <!-- <div class="container"> -->

                       
                     
                            
                          <a class="add-button-fullwidth" href=#poList> Purchase Orders +</a>

                            </div>
                            <br> <br> 
                            <?php

                            echo "<table >";
                                        echo "<tr>";
                                        echo "<th>Item Name</th>";
                                        echo " <th>Description</th>";
                                        echo " <th>Qty</th>";
                                        echo " <th>Vendor</th>";
                                        echo " <th></th>";
                                        echo " <th></th>";
                                        echo "</tr>";                                        
                                       echo "<tr>";
                                       echo "<td>";
                                      
                                        echo "<td><input  class='header-input-field' name='po_code' value='{$product_line['po_code']}'></td>";
                               
                                        // code to handle the case where $product_line is not defined or not an array
                                 

                  
                                       echo " </form>";

                                       ?>







<div class="overlay" id="poList">


    <div class="popup-main-cards">
        <div class="popup_card">

            Purchase Order List

            <?php

                        echo "<form action='" . BASEURL . "/fleetcenter/fleetJob' method='post'>";

                        $path = BASEURL;

                        echo "<table>";
                        echo "<tr>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";

                        echo "<form action='" . BASEURL . "/fleetcenter/fleetJob' method='post'>";
                        while ($row = $data['poList']->fetch_assoc()) {

                          $poc = $row['po_code'];

                          echo "<tr>";
                          echo "<td><input name='po_code' value=" . $row["po_code"] . " type='text'>";
                          echo "<td>" . $row["created_date"] . "</td>";
                          echo "<td>" . $row["requested_date"] . "</td>";
                          echo "<td></td>";

                          echo "<td><button type='submit' name='add_product'  class='subBtn'>Add</button></td>";
                     
                          echo "</tr>";
                        }
                        echo "</table>";
                        echo "</from>";

                        ?>
                        </form>

        </div>
    </div>

    <div class="popup_card_fields">


    </div>

</div>














</html>