<?php


?>

<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM fuelstation");
?>


<?php
$db = new Database();
// $vehicles = $db->runQuery("SELECT * from vehicle");
$categories = $db->runQuery("SELECT * from fuelstation");

if (isset($_GET["station_Id"])) {
  $station_Id = $_GET["station_Id"];
  $fuelstation = $db->runQuery("SELECT * from fuelstation where station_code ='" . $station_Id . "'");
  if ($fuelstation->num_rows > 0) {
    while ($row = $fuelstation->fetch_assoc()) {
      $stationId = $row['stationId'];
      $name = $row['name'];
      $address = $row['address'];
      $location = $row['location'];
      $creditLimit = $row['creditLimit'];
      $contactPerson = $row['contactPerson'];
      $contactNo = $row['contactNo'];
    }
  }
}
?>







<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
  <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Fuel Station</header>

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
      <h2>Add Fuel Station</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Fuel Station
        <div class="container">
          <form action="<?php echo BASEURL ?>/fleetcenter/addFuelStation" method="POST">
            <div>
              <div>


                <div class="fields">
                  <div class="input-field">
                    <label>Station ID</label>
                    <input name="stationId">
                  </div>

                  <div class="input-field">
                    <label>Name*</label>
                    <input name="name" id="name">
                    <span id="error-name" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-name" class="hide required-color error-message">Name Cannot Be Empty</span>
                  </div>


                  <div class="input-field">
                    <label>Address*</label>
                    <input name="address" id="address">
                    <span id="error-address" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-address" class="hide required-color error-message">Address Cannot Be Empty</span>
                  </div>



                  <div class="input-field">
                    <!-- <label>Chassis No *</label>
                    <input name="chassis_no" > -->
                  </div>

                  <div class="input-field">
                    <label>GPS Location*</label>
                    <input name="location" id="location">
                    <span id="error-location" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-location" class="hide required-color error-message">Location Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <!-- <label>Manufactured Year </label>
                    <input  type="date" name="mf_year"> -->
                  </div>

                  <div class="input-field">
                    <label>Credit Limit*</label>
                    <input name="creditLimit" id="credit">
                    <span id="error-credit" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-credit" class="hide required-color error-message">Credit Limit Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <!-- <label >Station  ID</label>
                    <input name="id" > -->
                  </div>

                  <div class="input-field">
                    <label>Contact Person</label>
                    <input name="contactPerson">
                  </div>


                  <div class="input-field">
                    <label>Contact No</label>
                    <input name="contactNo">
                  </div>

                  <!-- <div class="input-field">
                    <label >Vehice Category *</label>
                    <input name="category" >
                    <?php
                    if ($categories->num_rows > 0) {
                      while ($row = $categories->fetch_assoc()) {
                        $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" : "";
                        echo "<option value=\"" . $row['vehicle_category_code'] . "\"" . $selected . ">" . $row['name'] . "</option>";
                      }
                    }
                    ?>
                      
                  </div> -->

                  <!-- <div class="input-field w-100" >
                    <label >Upload Documents *</label>

                    <div class="drag-area ">
        
                        <input type="file" id="myfile">
                    </div>
                  </div>
               -->
                </div>
              </div>
              <center>
                <button class="subBtn">Add Fuel Station</button>
                </button>
              </center>
            </div>
          </form>



        </div>

      </div>



      <div class="card">Fuel Station List

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
              <?php foreach ($rows as $row) :

              ?>

                <tr>

                  <td><?php echo $row["stationId"]; ?></td>
                  <td><?php echo $row["name"]; ?></td>
                  <td><a class="viewBtn" href="#view">View</a></td>
                  <td><a class="delBtn"> Delete</a></td>

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
      <h3>Fuel Station Details <a href="<?php echo BASEURL ?>/fleetcenter/fuel">X</a></h3>

      <form action="<?php echo BASEURL ?>/fleetcenter/addFuelStation" method="POST">
        <div>
          <div>


            <div class="popup_card_fields">

              <div class="popup_card_input">
                <label>Station ID</label>
                <input name="stationId" value=<?php echo $row["stationId"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Name *</label>
                <input name="name" value=<?php echo $row["name"]; ?>>
              </div>


              <div class="popup_card_input">
                <label>Address *</label>
                <input name="address" value=<?php echo $row["address"]; ?>>
              </div>



              <div class="popup_card_input">
                <label>Gps Location</label>
                <input type="text" name="location" value=<?php echo $row["location"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Credit Limit*</label>
                <input name="creditLimit" value=<?php echo $row["creditLimit"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Contact Person </label>
                <input name="contactPerson" value=<?php echo $row["contactPerson"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Contact No*</label>
                <input name="contactNo" value=<?php echo $row["contactNo"]; ?>>
              </div>

              <!-- <div class="popup_card_input">
                    <label >Vehice Category *</label>
                    <input name="category" value = <?php echo $row["category"]; ?>>
                    <?php
                    if ($categories->num_rows > 0) {
                      while ($row = $categories->fetch_assoc()) {
                        $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" : "";
                        echo "<option value=\"" . $row['vehicle_category_code'] . "\"" . $selected . ">" . $row['name'] . "</option>";
                      }
                    }
                    ?>
                      
                  </div> -->

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



              <a class="closeBtn" href="<?php echo BASEURL ?>/fleetcenter/fuel">Close</a>
      </form>




      </form>
      <!-- Script -->
      <script src="<?php echo BASEURL ?>/public/js/addFuelStation.js"></script>