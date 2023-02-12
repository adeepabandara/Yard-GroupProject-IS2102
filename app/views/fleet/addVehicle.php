<?php



if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>





<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">


<div class="grid-container">
  <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Vehicle </header>



  <div class="sidenav">
    <div class="logo">
      <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center>
    </div>
    <a class="link" href="<?php echo BASEURL ?>/welcome/fleet"><i class='bx bxs-dashboard'></i>&nbsp
      Dashboard</a>

    <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Vehicle
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-container-on">
      <a class="link-drop-on" href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</a>
      <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/category">Category</a>

    </div>


    <a class="link" href="<?php echo BASEURL ?>/fleetcenter/driver"><i class='bx bxs-truck'></i>&nbsp Drivers</a>
    <a class="link" href="<?php echo BASEURL ?>/fleetcenter/fuel"><i class='bx bxs-coin'></i>&nbsp Fuel Station</a>
    <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a class="link-drop" href="#">Daily Sales Report</a>
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
    <a class="link" href="<?php echo BASEURL ?>/home/signout"><i class='bx bxs-left-arrow-square'></i>&nbsp Signout</a>
  </div>

  <main class="main">
    <div class="main-header">
      <h2>Add Vehicle</h2>
    </div>

    <div class="main-cards">

      <div class="card">Add Vehicle
        <div class="container">
          <form action="<?php echo BASEURL ?>/fleetcenter/addVehicle" method="POST">
            <div>

              <div class="fields">
                <div class="input-field">
                  <label>Vehicle ID</label>
                  <input type="text" name="id" id="vehicle-id" required>
                  <span id="error-vehicle-id" class="hide required-color error-message">Invalid Input</span>
                  <span id="empty-vehicle-id" class="hide required-color error-message">Vehicle ID Cannot Be
                    Empty</span>

                </div>

                <div class="input-field">
                  <label>Registartion No *</label>
                  <input name="reg_no" id="reg-no">
                  <span id="error-reg-no-id" class="hide required-color error-message">Invalid Input</span>
                  <span id="empty-reg-no-id" class="hide required-color error-message">Registration Number Cannot
                    Be Empty</span>
                </div>


                <div class="input-field">
                  <label>Model / Name *</label>
                  <input name="model" id="model" type="text">
                  <span id="error-name-id" class="hide required-color error-message">Invalid Input</span>
                  <span id="empty-name-id" class="hide required-color error-message">Name Cannot Be Empty</span>
                </div>



                <div class="input-field">
                  <label>Chassis No *</label>
                  <input name="chassis_no" id="chassi_no" type="text">
                  <span id="error-chassi-no" class="hide required-color error-message">Invalid Input</span>
                  <span id="empty-chassi-no" class="hide required-color error-message">Chassis Number Cannot Be
                    Empty</span>

                </div>

                <div class="input-field">
                  <label>Engine No *</label>
                  <input name="engine_no" id="engine_no" type="text">
                  <span id="error-engine-no" class="hide required-color error-message">Invalid Input</span>
                  <span id="empty-engine-no" class="hide required-color error-message">Engine Number Cannot Be
                    Empty</span>

                </div>

                <div class="input-field">
                  <label>Manufactured Year </label>
                  <input type="date" name="mf_year" id="mf_year">
                </div>

                <div class="input-field">
                  <label>Vehicle Color *</label>
                  <input name="color" id="color" type="color">
                </div>

                <div class="input-field">
                  <label>Vehice Category *</label>
                  <input name="category" id="category">
                </div>

                <div class="input-field w-100">
                  <label>Upload Documents *</label>

                  <div class="drag-area ">
                    <input type="file" name="documents" id="documents">
                  </div>
                </div>

              </div>
            </div>

            <center>
              <button class="subBtn" id="submit-button">Add Vehicle</button>
              </button>


            </center>
        </div>

        </form>



      </div>





      <!--Card 2-->
      <div class="card">Vehicle List
        <div class="container">
          <table>


            <?php

          $path = BASEURL;

          echo "<table>";
          echo "<tr>";
          echo "<th> Code </th>";
          echo "<th>Name</th>";
          echo "<th>Category</th>";
          echo "<th></th>";
          echo "<th></th>";
          while ($row = $data['result']->fetch_assoc()) {

            $wc = $row['id'];

            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["reg_no"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td><a class='viewBtn' onclick='abc(\"$wc\")'  href='#view' >View</a></td>";

            echo "<td><a class='delBtn' href=" . BASEURL . "/fleetcenter/deleteVehicle/" . $row["id"] . "> Delete</a></td>";
            echo "</tr>";
          }
          echo "</table>";
          ?>

        </div>
      </div>
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
                <label>Vehicle ID</label>
                <input name="id" id="id" type="text">
              </div>

              <div class="popup_card_input">
                <label>Registartion No *</label>
                <input name="reg_no" id="reg_no" type="text">
              </div>


              <div class="popup_card_input">
                <label>Model / Name *</label>
                <input name="model" id="model" type="text">
              </div>


              <div class="popup_card_input">
                <label>Chassis No *</label>
                <input name="chassis_no" id="chassis_no" type="text">
              </div>

              <div class="popup_card_input">
                <label>Engine No *</label>
                <input name="engine_no" id="engine_no" type="text">
              </div>

              <div class="popup_card_input">
                <label>Manufactured Year </label>
                <input type="date" name="mf_year" id="mf_year">
              </div>

              <div class="popup_card_input">
                <label>Vehicle Color *</label>
                <input type="color" id="color" value="#0000ff">
              </div>

              <div class="popup_card_input">
                <label>Vehice Category *</label>
                <input name="category" id="category" type="text">


              </div>

              <div class="popup_card_input">
                <label>Upload Documents *</label>

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




      <script>
      function abc(id) {
        var url = '<?php echo "$path/fleetcenter/getVehicle/" ?>' + id;
        console.log(url);
        fetch(url)
          .then((response) => response.json())
          .then((json) => {
            console.log(json);
            console.log(json[0].id);
            document.getElementById("id").value = json[0].id;
            document.getElementById("model").value = json[0].model;
            document.getElementById("reg_no").value = json[0].reg_no;
            document.getElementById("chassis_no").value = json[0].chassis_no;
            document.getElementById("engine_no").value = json[0].engine_no;
            document.getElementById("mf_year").value = json[0].mf_year;
            document.getElementById("color").value = json[0].color;
            document.getElementById("category").value = json[0].category;
            document.getElementById("documents").value = json[0].documents;

 

          })

      };
    </script>





























      </form>
      <!-- Script -->
      <script src="<?php echo BASEURL ?>/public/js/addVehicle.js"></script>

      <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
      </script>