

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
    <header class="header"> Fleet Center&nbsp&nbsp>&nbsp&nbspAdd Driver</header>

    <head>
    </head>

    <div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link"  href="<?php echo BASEURL ?>/welcome/fleet"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Vehicle
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/vehicle">Add Vehicle</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/fleetcenter/category">Category</a>

  </div>


  <a class="link-on" href="<?php echo BASEURL ?>/fleetcenter/driver"><i class='bx bxs-truck'></i>&nbsp Drivers</a>
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
                    <input name="driver_id" >
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
                    <input name="contact_no" id="contact-no">
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
                    <input name="email_address" id="email">
                    <span id="error-email" class="hide required-color error-message">Invalid Input</span>
                    <span id="empty-email" class="hide required-color error-message">Email Address Cannot Be Empty</span>
                  </div>

                  <div class="input-field">
                    <!-- <label>Contact No*</label>
                    <input name="chassis_no" > -->
                  </div>

                  <div class="input-field">
                    <label>Username*</label>
                    <input name="username" id="user-name">
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













