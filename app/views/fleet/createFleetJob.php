<?php

// Check if the form has been submitted
if (isset($_POST['add_product'])) {
    // Get the product line data from the form
    $po_code = $_POST['po_code'];

    $index = $_POST['index'];

    // Create an array to store the product line data
    $product_line = array(
        'po_code' => $po_code,

    );

    if(!isset($_SESSION['product_lines'])) {
        // If it doesn't exist, create it as an array
        $_SESSION['product_lines'] = array();
    }

    $_SESSION['product_lines'][$index] = $product_line;
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
                            <form  action="<?php echo BASEURL ?>/commercial/createFleetJob" method="POST" >
                                <div>
                                    <div>
                                     <form>
                                        <div class="header-fields">

                                          <?php

                                          $row = $data['id']->fetch_assoc();
                                          $last_id = $row['max_id'];
                                          $string = "FJ";

                                          if (!substr($last_id, 0, 2) === $string) {
                                              $last_id = $string . "1";
                                          } else {
                                              $last_id = intval(substr($last_id, 2));
                                              $last_id++;
                                              $last_id = $string . strval($last_id);
                                          }

                                          $next_id = $last_id;


                                          echo"<input class='disable-input-field' type='text' name='fj_code' value=" . $next_id . " required>";

                                          ?>









                                            <div class="header-sub-fields">
                                                
                                                <div class="header-input-field">
                                                <label class="input-field label">Date</label>
                                                <input  class="header-input-field"  type="date" id="created_date" name="created_date" placeholder="Type Here..." >
                                              </div>

                                        <!--

                                            <div class="header-input-field">
                                                <label class="input-field label">Assigned Vehicle</label>
                                                <input class="header-input-field" type="text" id="vehicle_id" name="vehicle_id" placeholder="Type Here..." >
                                            </div>

                                            <div class="header-input-field">
                                                <label class="input-field label">Assigned Driver</label>
                                                <input class="header-input-field" type="text" id="driver_id" name="driver_id" placeholder="Type Here..." >
                                            </div>

-->

                                            <div class="header-input-field">
                                                <label class="input-field label">Dispatched Date</label>
                                                <input class="header-input-field" type="date" id="dispatch_date" name="dispatch_date" placeholder="Type Here..." >
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

         
                            

                          
                    <!-- Purchase Orders -->
                                          
                          <a class="add-button-fullwidth" href=#poList> Purchase Orders +</a>
                          <br><br><br><br>


                          <table id="myTable">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Supplier</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>



                                    <?php

// Check if the session variable for product lines exists
if(isset($_SESSION['product_lines'])) {
  // Loop through the product lines in the session variable
  foreach($_SESSION['product_lines'] as $product_line) {
    echo "<tr>";
    echo "<td><input  class='header-input-field' name='po_code' value='{$product_line['po_code']}'></td>";


    echo "</tr>";
    
   

  }
}

?>
                                   
                                       
                                </tr>
                               
                            </table>

                            <button type="submit" class="add-button-fullwidth" > Create Fleet Job</button>

</form>
                         







<div class="overlay" id="poList">
    <div class="popup-main-cards">
        <div class="popup_card">
            Purchase Order List
            <?php


                        $path = BASEURL;

                        echo "<table>";
                        echo "<tr>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";
                        echo "<th></th>";

                     
                        $index = 0;
                        while ($row = $data['poList']->fetch_assoc()) {
                            echo "<form action='" . BASEURL . "/fleetcenter/fleetJob' method='post'>";
                            echo "<input type='hidden' name='po_code' value='".$row["po_code"]."'>";
                            echo "<input type='hidden' name='index' value='".$index."'>";
                  
                            
                            echo "<tr>";
                            echo "<td>" . $row["po_code"] . "</td>";
                            echo "<td>" . $row["created_date"] . "</td>";
                            
                            echo "<td>" . $row["requested_date"] . "</td>";
                            echo "<td></td>";
                            echo "<td><button type='submit' name='add_product' class='subBtn'>Add</button></td>";
                            echo "</tr>";
                            echo "</form>";
                            $index++;
                        }
                        echo "</table>";
                        ?>
                        

        </div>
    </div>

    <div class="popup_card_fields">


    </div>

</div>














</html>