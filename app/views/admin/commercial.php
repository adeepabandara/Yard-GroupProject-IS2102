<<<<<<< Updated upstream
=======
<!DOCTYPE html>







>>>>>>> Stashed changes
<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}


$conn = mysqli_connect("localhost", "root", "", "yard");
<<<<<<< Updated upstream
$rows = mysqli_query($conn, "SELECT * FROM commercial_users");
=======
$rows = mysqli_query($conn, "SELECT * FROM users");
>>>>>>> Stashed changes

?>


<script type="text/javascript"> 
    function getLocationConstant()
   {
       if(navigator.geolocation)
       {
           navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);  
       } else {
           alert("Your browser or device doesn't support Geolocation");
       }
   }
   
   // If we have a successful location update
   function onGeoSuccess(event)
   {
       document.getElementById("Latitude").value =  event.coords.latitude; 
       document.getElementById("Longitude").value = event.coords.longitude;
   
   }
   
   // If something has gone wrong with the geolocation request
   function onGeoError(event)
   {
       alert("Error code " + event.code + ". " + event.message);
   }
    </script>










<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<<<<<<< Updated upstream
<script defer src="<?php echo BASEURL ?>/admin/index.js"></script>
=======

>>>>>>> Stashed changes

<div class="grid-container">

  <header class="header">Admin&nbsp>&nbsp Commercial & Finance <div></a>&nbsp&nbsp&nbsp<img src="<?php echo BASEURL ?>/images/img_avatar.png"class="avatar"></a></div></header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/warehouse">Warehouse</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/fleetCenter">Fleet Center</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/commercial">Commercial & Finance</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>


  <main class="main">
    <div class="main-header">

      <h2>Commercial & Finance Department</h2>

    </div>


    <div class="main-cards">


      <div class="card">Add Users
     

 
        <div class="container">
<<<<<<< Updated upstream
          <form action="<?php echo BASEURL ?>/adminFunctions/createCommercial_User" method="POST" id="form">
=======
          <form action="<?php echo BASEURL ?>/adminFunctions/createCommercial" method="POST" id="form">
>>>>>>> Stashed changes
            <div class="form first">
              <div>


                <div class="fields">
                  <div class="input-field">
                    <label>Department Code</label>
                    <input name="commercial_code" type="text" placeholder="Type Here" required>

                  </div>

                  <div class="input-field">
<<<<<<< Updated upstream
                    <label> Job Position</label>
                    <input name="job_position" type="text" placeholder="Type Here" required>
=======
                    <label>Name</label>
                    <input name="name" type="text" placeholder="Type Here" required>
>>>>>>> Stashed changes
                  </div>


                  <div class="fields">
                  <div class="input-field">
<<<<<<< Updated upstream
                    <label>Employee Id</label>
                    <input name="employee_id" type="text" placeholder="Type Here" required>
=======
                    <label>Address</label>
                    <input name="address" type="text" placeholder="Type Here" >
>>>>>>> Stashed changes

                  </div>

                  <div class="input-field">
<<<<<<< Updated upstream
                    <label> NIC</label>
                    <input name="nic" type="text" placeholder="Type Here" required>
=======
                    <label>latitude</label>
                    <input name="latitude" type="text" placeholder="Type Here" >
>>>>>>> Stashed changes
                  </div>


                  <div class="input-field">
<<<<<<< Updated upstream
                    <label>Adddress</label>
                    <input name="address" type="text" placeholder="Type Here">
=======
                    <label>longitude </label>
                    <input name="longitude" type="text" placeholder="Type Here">
>>>>>>> Stashed changes
                  </div>

                  <div class="input-field">
                    <label>Email Address</label>
                    <input name="email_address" type="text" placeholder="Type Here">
                  </div>


                  <div class="input-field">
                    <label>Name</label>
                    <input name="cp_name" type="text" placeholder="Type Here">
                  </div>

                  <div class="input-field">
                    <label>Contact Number</label>
                    <input name="cp_number" type="text" placeholder="Type Here">
                  </div>

        
                  <div class="input-field">
                    <label>Username</label>
                    <input name="username" type="text" id="username" placeholder="Type Here" required>
                    <div class="error"></div>
                  </div>


                  <div class="input-field">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Type Here" required>
                  </div>

                </div>
              </div>

              <button class="subBtn" onclick="createWarehouse()" type="submit" >
                <span class="btnText"  >Create User</span>
              </button>
            </div>
          </form>

        </div>
      </div>

      </div>

      <div class="card">Users List



        <div class="container">

          <table>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th></th>
              <th></th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach($rows as $row) : 
              
              ?>
            
            <tr>

              <td><?php echo $row["cp_name"]; ?></td>
              <td><?php echo $row["email_address"]; ?></td>
              <td><?php echo $row["cp_number"]; ?></td>
              <td><a class="viewBtn" href="#view"  >View</a></td> 
              <td><a class="delBtn" onclick="deleteWarehouse()" href="<?php echo BASEURL ?>/adminFunctions/deleteCommercial_User/nic"> Delete</a></td>

            </tr>
            <?php endforeach; ?>

        </div>


      </div>

    </div>

</div>

</main>

</div>

</div>


<script>
function deleteWarehouse() {
  confirm("Are you Sure Want to Delete This Warehouse");
}



window.onclick = function(event) {
  if (event.target == categoryModal) {
    categoryModal.style.display = "none";
  }
}

</script>

























<div class="overlay" id="view">

  <div class="popup-main-cards">


    <div class="popup_card">
<h3>User Details <a href="<?php echo BASEURL ?>/warehouse/createWarehouse">X</a></h3>
    
          <form action="<?php echo BASEURL ?>/warehouse/createWarehouse" method="POST">
        
            <div class="popup_card_fields">

                  <div class="popup_card_input">
                    <label>Department Code</label>
                    <input name="department_code" value = <?php echo $row["department_code"]; ?> >
                  </div>
                  <div class="popup_card_input">
                    <label>Job Position</label>
                    <input name="job_position" value = <?php echo $row["job_position"]; ?>>
                  </div>
                  <div class="popup_card_input">
                    <label>Employee_id</label>
                    <input name="employee_id" value = <?php echo $row["employee_id"];?>>
                  </div>
                  <div class="popup_card_input">
                    <label>NIC</label>
                    <input name="nic" type="text"  value = <?php echo $row["nic"];?>>
                  </div>
                  <div class="popup_card_input">
                    <label>Address</label>

                    <input name="address" type="text" value = <?php echo $row["address"];?>>

                  </div>

                  <div class="popup_card_input">
                    <label>Email Address</label>

                    <input name="email_address" type="text"  value = <?php echo $row["email_address"];?>>

                  </div>

                  <div class="popup_card_input">
                    <label>Username</label>
                    <input name="username" value = <?php echo $row["username"];?>>
                  </div>
                  <div class="popup_card_input">
                    <label>Password</label>
                    <input name="password"value = <?php echo $row["password"];?>>
                  </div>
          
              <button class="deleteBtn" onclick="createWarehouse()">
                <span class="btnText">Delete</span>
              </button>
              <button class="subBtn" onclick="createWarehouse()">
                <span class="btnText">Update</span>
              </button>
          
        
        <a class="closeBtn" href="<?php echo BASEURL ?>/adminFunctions/commercial">Close</a>

        </form>

      </div>

    </div>

  </div>

  <script>
  
  <script>
  function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();




</script>




  <!--
<button class="delBtn">
                  <span class="btnText">Delete</span>
                </button>
              </td>
            </tr>
            <tr>
              <td>101</td>
              <td>Dehiwala</td>
              <td>No20,Galle Rd,Dehiwala</td>
              <td>
                <button class="viewBtn">
                  <span class="btnText">View</span>
                </button>
              </td>
              <td>
                <button class="delBtn">
                  <span class="btnText">Delete</span>
                </button>
<!--
<div class="input-field">
  <label>Warehouse Name</label>
  <input type="date" placeholder="Enter birth date" required>
</div>
<div class="input-field">
  <label>Email</label>
  <input type="text" placeholder="Enter your email" required>
</div>
<div class="input-field">
  <label>Mobile Number</label>
  <input type="number" placeholder="Enter mobile number" required>
</div>
<div class="input-field">
  <label>Occupation</label>
  <input type="text" placeholder="Enter your ccupation" required>
</div>
-->