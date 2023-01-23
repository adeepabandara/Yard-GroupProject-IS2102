<?php


?>

<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM driver");
?>


<?php
$db = new Database();
// $vehicles = $db->runQuery("SELECT * from vehicle");
$categories = $db->runQuery("SELECT * from driver");

if (isset($_GET["driver_id"])) {
  $driver_id = $_GET["driver_id"];
  $vehicle_category = $db->runQuery("SELECT * from driver where driverCode ='" . $driver_id . "'");
  if ($driver->num_rows > 0) {
    while ($row = $driver->fetch_assoc()) {
      $driverId = $row['driverId'];
      $name = $row['name'];
      $nic = $row['nic'];
      $contactNo = $row['contactNo'];
      $address = $row['address'];
      $eAddress = $row['eAddress'];
      $uName = $row['uName'];
      $password = $row['password'];
    }
  }
}
?>








<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
    <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Driver</header>

    <head>
    </head>
    <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
    <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/fleet">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/category">Add Category</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/driver">Add driver</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/fuel">Add Fuel Station</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Add Driver</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Driver
        <div class="container">
          <form action="<?php echo BASEURL ?>/fleetcenter/addDriver" method="POST">
            <div>
              <div >


                <div class="fields">
                  <div class="input-field">
                    <label >Driver ID</label>
                    <input name="driverId" >
                  </div>

                  <div class="input-field">
                    <label>Name *</label>
                    <input name="name" id="name">
                    <span id="error-name" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-name" class="hide required-color error-message">Name Cannot Be Empty</span>
                  </div>


                  <div class="input-field">
                    <label>NIC*</label>
                    <input name="nic" id="nic">
                    <span id="error-nic" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-nic" class="hide required-color error-message">NIC Cannot Be Empty</span>
                  </div>



                  <div class="input-field">
                    <label>Contact No*</label>
                    <input name="contactNo" id="contact-no">
                    <span id="error-contact-no" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-contact-no" class="hide required-color error-message">Contact Number Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <label>Address*</label>
                    <input name="address" id="address">
                    <span id="error-address" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-address" class="hide required-color error-message">Address Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <!-- <label>Manufactured Year </label>
                    <input  type="date" name="mf_year"> -->
                  </div>

                  <div class="input-field">
                    <label >Email Address *</label>
                    <input name="eAddress" id="email">
                    <span id="error-email" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-email" class="hide required-color error-message">Email Address Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <!-- <label>Contact No*</label>
                    <input name="chassis_no" > -->
                  </div>

                  <div class="input-field">
                    <label>Username*</label>
                    <input name="uName" id="user-name">
                    <span id="error-user-name" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-user-name" class="hide required-color error-message">Username Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <label>Password*</label>
                    <input name="password" id="password">
                    <span id="error-password" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-password" class="hide required-color error-message">Password Cannot Be Empty</span>
                  </div>

                  <!-- <div class="input-field">
                    <label >Vehice Category *</label>
                    <input name="category" >
                    <?php
                    if ($categories->num_rows > 0) {
                        while ($row = $categories->fetch_assoc()) {
                            $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" :"" ;
                            echo "<option value=\"".$row['vehicle_category_code']."\"".$selected.">".$row['name']."</option>" ;
                        }
                    }
                    ?>
                      
                  </div> -->
        
                  <!-- <div class="input-field w-100" >
                    <label >Upload Documents *</label>

                    <div class="drag-area ">
        
                        <input type="file" id="myfile">
                    </div>
                  </div> -->
              
                </div>
              </div><center>
                <button class="subBtn">Add Driver</button>
              </button>
              </center>
            </div>
          </form>



        </div>

      </div>



      <div class="card">Driver List

        <div class="container">

          <table>
            <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th></th>
              <th></th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($rows as $row) : 
              
              ?>
            
            <tr>

              <td><?php echo $row["driverId"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><a class="viewBtn" href="#view"  >View</a></td> 
              <td><a class="delBtn" > Delete</a></td>

            </tr>
            <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>

    </div>

</div>

<div class="overlay" id="view">

  <div class="popup-main-cards">


    <div class="popup_card">
<h3>Driver Details <a href="<?php echo BASEURL ?>/fleetcenter/driver">X</a></h3>
    
<form action="<?php echo BASEURL ?>/fleetcenter/addDriver" method="POST">
            <div>
              <div>


              <div class="popup_card_fields">

                  <div class="popup_card_input">
                    <label >Driver ID</label>
                    <input name="driverId" value = <?php echo $row["driverId"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label>Name *</label>
                    <input name="name" value = <?php echo $row["name"]; ?> >
                  </div>


                  <div class="popup_card_input">
                    <label>NIC*</label>
                    <input name="nic" value = <?php echo $row["nic"]; ?>>
                  </div>



                  <div class="popup_card_input">
                    <label>Contact No*</label>
                    <input  name="contactNo" value = <?php echo $row["contactNo"]; ?> >
                  </div>

                  <div class="popup_card_input">
                    <label>Address*</label>
                    <input name="address" value = <?php echo $row["address"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label>Email Address </label>
                    <input   name="eAddress" value = <?php echo $row["eAddress"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label >Username *</label>
                    <input name="uName" value = <?php echo $row["uName"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label >Password *</label>
                    <input name="password" value = <?php echo $row["password"]; ?>>
                    <!-- <?php
                    if ($categories->num_rows > 0) {
                        while ($row = $categories->fetch_assoc()) {
                            $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" :"" ;
                            echo "<option value=\"".$row['vehicle_category_code']."\"".$selected.">".$row['name']."</option>" ;
                        }
                    }
                    ?> -->
                      
                  </div>
        
                  <!-- <div class="popup_card_input">
                    <label >Upload Documents *</label>

                    <div class="drag-area">
                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <input type="file" id="myfile">
                    </div>
                  </div> -->

              <button class="deleteBtn" onclick="createFleetCenter()">
                <span class="btnText">Delete</span>
              </button>
              <button class="subBtn" onclick="createFleetCenter()">
                <span class="btnText">Update</span>
              </button>
             
          
        
        <a class="closeBtn" href="<?php echo BASEURL ?>/fleetcenter/driver">Close</a>
          </form>
          
        
        

        </form>
   <!-- Script -->
   <script src="<?php echo BASEURL ?>/public/js/addDriver.js"></script>

















