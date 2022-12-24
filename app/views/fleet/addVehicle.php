<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM vehicle");
?>


<?php
$db = new Database();
$vehicles = $db->runQuery("SELECT * from vehicle");
$categories = $db->runQuery("SELECT * from vehicle_category");

if (isset ($_GET["vehicleId"])) {
    $vehicleId = $_GET["vehicleId"];
    $vehicle = $db->runQuery("SELECT * from vehicle where vehicle_code ='".$vehicleId."'");
    if ($vehicles->num_rows > 0) {
        while ($row = $vehicle->fetch_assoc()) {
            $model = $row['name'];
            $reg_no = $row['registration_no'];
            $chassis_no = $row['chassie_no'];
            $engine_no = $row['engine_no'];
            $mf_year = $row['manufactured_year'];
            $color = $row['color'];
            $vehicle_category = $row['vehicle_category'];
        }
    }
}
?>







<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
    <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Vehicle </header>

    <head>
    </head>
    <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/fleetcenter">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/fleetcenter/driver">Add driver</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Add Vehicle</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Vehicle
        <div class="container">
          <form action="<?php echo BASEURL ?>/fleetcenter/addVehicle" method="POST">
            <div>
              <div >


                <div class="fields">
                  <div class="input-field">
                    <label >Vehicle ID</label>
                    <input name="id" >
                  </div>

                  <div class="input-field">
                    <label>Registartion No *</label>
                    <input name="reg_no">
                  </div>


                  <div class="input-field">
                    <label>Model / Name *</label>
                    <input name="model" >
                  </div>



                  <div class="input-field">
                    <label>Chassis No *</label>
                    <input name="chassis_no" >
                  </div>

                  <div class="input-field">
                    <label>Engine No *</label>
                    <input name="engine_no">
                  </div>

                  <div class="input-field">
                    <label>Manufactured Year </label>
                    <input  type="date" name="mf_year">
                  </div>

                  <div class="input-field">
                    <label >Vehicle Color *</label>
                    <input name="color">
                  </div>

                  <div class="input-field">
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
                      
                  </div>
        
                  <div class="input-field w-100" >
                    <label >Upload Documents *</label>

                    <div class="drag-area ">
        
                        <input type="file" id="myfile">
                    </div>
                  </div>
              
                </div>
              </div><center>
                <button class="subBtn">Add Vehicle</button>
              </button>
              </center>
            </div>
          </form>



        </div>

      </div>



      <div class="card">Vehicle List

        <div class="container">

          <table>
            <thead>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Registartion_No</th>
              <th></th>
              <th></th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($rows as $row) : 
              
              ?>
            
            <tr>

              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["model"]; ?></td>
              <td><?php echo $row["reg_no"]; ?></td>
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
<h3>Warehouse Details <a href="<?php echo BASEURL ?>/warehouse/createWarehouse">X</a></h3>
    
<form action="<?php echo BASEURL ?>/fleetcenter/addVehicle" method="POST">
            <div>
              <div>


              <div class="popup_card_fields">

                  <div class="popup_card_input">
                    <label >Vehicle ID</label>
                    <input name="id" name="id" value = <?php echo $row["id"]; ?>/>
                  </div>

                  <div class="popup_card_input">
                    <label>Registartion No *</label>
                    <input name="reg_no" value = <?php echo $row["reg_no"]; ?> />
                  </div>


                  <div class="popup_card_input">
                    <label>Model / Name *</label>
                    <input name="model" value = <?php echo $row["model"]; ?>>
                  </div>



                  <div class="popup_card_input">
                    <label>Chassis No *</label>
                    <input type="text" name="chassis_no" value = <?php echo $row["chassis_no"]; ?> >
                  </div>

                  <div class="popup_card_input">
                    <label>Engine No *</label>
                    <input name="engine_no" value = <?php echo $row["engine_no"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label>Manufactured Year </label>
                    <input  type="date" name="mf_year" value = <?php echo $row["mf_year"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label >Vehicle Color *</label>
                    <input name="color" value = <?php echo $row["color"]; ?>>
                  </div>

                  <div class="popup_card_input">
                    <label >Vehice Category *</label>
                    <input name="category" value = <?php echo $row["category"]; ?>>
                    <?php
                    if ($categories->num_rows > 0) {
                        while ($row = $categories->fetch_assoc()) {
                            $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" :"" ;
                            echo "<option value=\"".$row['vehicle_category_code']."\"".$selected.">".$row['name']."</option>" ;
                        }
                    }
                    ?>
                      
                  </div>
        
                  <div class="popup_card_input">
                    <label >Upload Documents *</label>

                    <div class="drag-area">
                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <input type="file" id="myfile">
                    </div>
                  </div>

              <button class="deleteBtn" onclick="createWarehouse()">
                <span class="btnText">Delete</span>
              </button>
              <button class="subBtn" onclick="createWarehouse()">
                <span class="btnText">Update</span>
              </button>
      
          
        
        <a class="closeBtn" href="<?php echo BASEURL ?>/fleetcenter/vehicle">Close</a>
          </form>
          
        
        

        </form>


















