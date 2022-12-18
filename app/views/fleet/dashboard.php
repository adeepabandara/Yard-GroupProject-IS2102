<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
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
      <!-- <script src="js/pop_up_button.js"></script>    -->
    </head>
    <aside class="sidenav">
    <center><img src="images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item">Dashboard</li>
      <li class="sidenav__list-item">Warehouse</li>
      <li class="sidenav__list-item">Fleet Center</li>
      <li class="sidenav__list-item">Commercial & Finance</li>
      <li class="sidenav__list-item"><a href="welcome/signout">Sign Out</a></li>
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
            <div class="form first">
              <div class="details personal">


                <div class="fields">
                  <div class="input-field">
                    <label for="id" class="label-title">Vehicle ID</label>
                    <input type="text" id="firstname" class="form-input" name="id" 
                    value="<?php echo isset($vehicleId) ? $vehicleId : "" ?>"
                        placeholder="Type Here..." />
                  </div>
                  <div class="input-field">
                    <label for="number" class="label-title">Registartion No *</label>
                    <input type="text" id="lastname" name="reg_no" class="form-input"
                        placeholder="Type Here..." required="required" value="<?php echo isset($reg_no) ? $reg_no : "" ?>" />
                  </div>
                  <div class="input-field">
                    <label for="model" class="label-title">Model / Name *</label>
                    <input type="text" id="name" name="model" class="form-input"
                        placeholder="Type Here..." required="required"  value="<?php echo isset($model) ? $model : "" ?>">
                  </div>

                  <div class="input-field">
                    <label for="chassisNo" class="label-title">Chassis No *</label>
                    <input type="text" id="chassisNo" name="chassis_no" class="form-input"
                        placeholder="Type Here..." required="required"  value="<?php echo isset($chassis_no) ? $chassis_no : "" ?>" >
                  </div>

                  <div class="input-field">
                    <label for="engineNo" class="label-title">Engine No *</label>
                    <input type="text" id="engineNo" name="engine_no" class="form-input"
                        placeholder="Type Here..." required="required"  value="<?php echo isset($engine_no) ? $engine_no : "" ?>" >
                  </div>

                  <div class="input-field">
                    <label for="chassisNo" class="label-title">Manufactured Year </label>
                    <input type="date" id="manufactureYear" name="mf_year" class="form-input"
                        placeholder="Type Here..."  value="<?php echo isset($mf_year) ? $mf_year : "" ?>" ><?php $mf_year_erro ?>
                  </div>

                  <div class="input-field">
                    <label for="color" class="label-title">Vehicle Color *</label>
                    <input type="text" id="color" name="color" class="form-input"
                        placeholder="Type Here..." required="required"  value="<?php echo isset($color) ? $color : "" ?>">
                  </div>

                  <div class="input-field">
                    <label for="chassisNo" class="label-title">Vehice Category *</label>
                    <select required name="category">
                    <option value="">Select </option>
                    <?php
                    if ($categories->num_rows > 0) {
                        while ($row = $categories->fetch_assoc()) {
                            $selected = isset($vehicle_category) && $vehicle_category == $row['vehicle_category_code'] ? "selected" :"" ;
                            echo "<option value=\"".$row['vehicle_category_code']."\"".$selected.">".$row['name']."</option>" ;
                        }
                    }
                    ?>
                
                      </select>
                      
                  </div>
                   
                  <!-- <div class="input-field">
                    <label>Username</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>
                  <div class="input-field">
                    <label>Password</label>
                    <input type="password" placeholder="Type Here" required>
                  </div> -->
                  <div class="horizontal-group">
                    <div class="horizontal-group .left">
                    </div>
                    <div class=".horizontal-group .right">
                    </div>
                </div>
                  <div class="input-field">
                    <label for="name" class="label-title">Upload Documents *</label>
                    <!-- <div class="drag-area">
                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                        <header>Drag & Drop to Upload File</header>
                        <span>OR</span> -->
                        <input type="file" id="myfile">
                    </div>
                
                </div>
              </div><center>
                <button class="subBtn">Add Vehicle</button>
              </button>
              </center>
            </div>
          </form>

          <!-- <div class="modal-content"> -->
                        <!-- <span class="close">&times;</span> -->
                        <!-- <h2 class="add-category-title">Add Category</h2> -->
                        <!-- <div class="horizontal-group"> -->
                        <!-- <button id="add_category_button" class="button-plus" >+</button> -->
                        <!-- <div id="add_category" class="modal"> -->
                        <!-- <form action="<?php echo BASEURL ?>/fleetcenter/addCategory" method="POST" >
                            <div class="form-group left">
                                <label for="categoryId" class="label-title">Category
                                    ID</label>
                                <input type="text" id="categoryId" class="form-input"
                                    placeholder="VCID09" name="categoryId">
                            </div>

                            <div class="form-group right">
                                <label for="categoryName" class="label-title">Category
                                    Name
                                    *
                                </label>
                                <input type="text" id="categoryName" class="form-input"
                                    placeholder="Type Here..." name="categoryName">
                            </div>
                            <div class="form-group">
                                <label for="description"
                                    class="label-title">Description</label>
                                <input type="text" class="form-input" id="description"
                                    name="description" placeholder="Type Here..."
                                    required="required">
                            </div>
                            <div style="text-align: center;"><button
                                    class="button_normal" type="submit">Add Category</button>
                            </div>
                            </form> -->
                        <!-- </div> -->
                   <!-- </div> -->
          <!-- </div> -->

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
            <?php

            if ($vehicles->num_rows > 0) {
                while ($row = $vehicles->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['vehicle_code'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['registration_no'] . "</td>";
                    echo "<td><button class=\"viewBtn\" onclick=\"loadVehicle(".$row['vehicle_code'].")\"><span class=\"btnText\">View</span></button></td>";
                    echo "<td><button class=\"delBtn\"><span class=\"btnText\">Delete</span></button></td>";
                    echo "</tr>";
            ?>
            <?php
                    }
                }
                // $db->dbClose();
            ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

</div>








</main>

</div>
<script>
    function loadVehicle(id) {
        window.location = "<?php echo BASEURL."/welcome/?vehicleId="?>"+id;
    }

    function myFunction() {
        console.log(document.getElementById("categoryId").value, document.getElementById("description").value)
        fetch(`<?php echo BASEURL ?>/fleetcenter/addCategory`, {
                method: 'POST',
                headers: {
                    // 'Accept': 'application/json',
                    // 'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    "categoryId": document.getElementById("categoryId").value,
                    "categoryName": document.getElementById("categoryName").value,
                    "description": document.getElementById("description").value
                })
            })
            .then(response => response.json())
            .then(response => console.log(response))
    }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>
    






</body>

</html>