<?php

?>




<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
  <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Category </header>

  <head>
  </head>

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
      <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</a>
      <a class="link-drop-on" href="<?php echo BASEURL ?>/fleetcenter/category">Category</a>

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



      <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
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