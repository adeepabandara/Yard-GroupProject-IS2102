<?php

?>

<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM vehicle_category");
?>


<?php
$db = new Database();
// $vehicles = $db->runQuery("SELECT * from vehicle");
$categories = $db->runQuery("SELECT * from vehicle_category");

if (isset($_GET["vehicleCategoryId"])) {
  $vehicleCategoryId = $_GET["vehicleCategoryId"];
  $vehicle_category = $db->runQuery("SELECT * from vehicle_category where vehicle_categoryCode ='" . $vehicleCategoryId . "'");
  if ($vehicle_category->num_rows > 0) {
    while ($row = $vehicle_category->fetch_assoc()) {
      $vehicle_category_code = $row['vehicle_category_code'];
      $name = $row['name'];
      $description = $row['description'];
    }
  }
}
?>







<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
  <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Category </header>

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
      <h2>Add Category</h2>
    </div>


    <div class="main-cards">


      <div class="card">Category Details
        <div class="container">
          <form action="<?php echo BASEURL ?>/fleetcenter/addCategory" method="POST">
            <div>
              <div>


                <div class="fields">
                  <div class="input-field">
                    <label>Category ID</label>
                    <input name="vehicle_category_code">
                  </div>

                  <div class="input-field">
                    <label>Category Name*</label>
                    <input name="name" id="name">
                    <span id="error-name" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-name" class="hide required-color error-message">Category Name Cannot Be Empty</span>
                  </div>


                  <div class="input-field">
                    <label>Description*</label>
                    <input name="description" id="description">
                    <span id="error-description" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-description" class="hide required-color error-message">Description Cannot Be Empty</span>
                  </div>



                  <!-- <div class="input-field">
                    <label>Chassis No *</label>
                    <input name="chassis_no" >
                  </div> -->

                  <!-- <div class="input-field">
                    <label>Engine No *</label>
                    <input name="engine_no">
                  </div> -->

                  <!-- <div class="input-field">
                    <label>Manufactured Year </label>
                    <input  type="date" name="mf_year">
                  </div> -->

                  <!-- <div class="input-field">
                    <label >Vehicle Color *</label>
                    <input name="color">
                  </div> -->

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
                <button class="subBtn">Add Category</button>
                </button>
              </center>
            </div>
          </form>



        </div>

      </div>



      <div class="card">Category List

        <div class="container">

          <table>
            <thead>
              <tr>
                <th>Code</th>
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

                  <td><?php echo $row["vehicle_category_code"]; ?></td>
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
      <h3>Category Details <a href="<?php echo BASEURL ?>/fleetcenter/category">X</a></h3>

      <form action="<?php echo BASEURL ?>/fleetcenter/addCategory" method="POST">
        <div>
          <div>


            <div class="popup_card_fields">

              <div class="popup_card_input">
                <label>Category ID</label>
                <input name="vehicle_category_code" value=<?php echo $row["vehicle_category_code"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Category Name *</label>
                <input name="name" value=<?php echo $row["name"]; ?>>
              </div>


              <div class="popup_card_input">
                <label>Description*</label>
                <input name="description" value=<?php echo $row["description"]; ?>>
              </div>



              <!-- <div class="popup_card_input">
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
                    <input name="category" value = <?php echo $row["category"]; ?>> -->
              <!-- <?php
                    if ($categories->num_rows > 0) {
                      while ($row = $categories->fetch_assoc()) {
                        $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" : "";
                        echo "<option value=\"" . $row['vehicle_category_code'] . "\"" . $selected . ">" . $row['name'] . "</option>";
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



            <a class="closeBtn" href="<?php echo BASEURL ?>/fleetcenter/category">Close</a>
      </form>




      </form>

      <!-- Script -->
      <script src="<?php echo BASEURL ?>/public/js/addCategory.js"></script>