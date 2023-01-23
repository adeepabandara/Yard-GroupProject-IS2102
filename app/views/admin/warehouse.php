<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}


$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM warehouse");

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

<script defer src="<?php echo BASEURL ?>/admin/index.js"></script>

<div class="grid-container">

  <header class="header">Admin&nbsp>&nbsp Warehouse<div><a id="MyClockDisplay" class="clock" onload="showTime()" ></a>&nbsp&nbsp&nbsp<img src="<?php echo BASEURL ?>/images/img_avatar.png"class="avatar"></a></div></header>


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
      <h2>Add Warehouse</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Warehouse
     

 
        <div class="container">
          <form action="<?php echo BASEURL ?>/adminFunctions/createWarehouse" method="POST" id="form">
            <div>
              <div>


                <div class="fields">

                
                  <div class="input-field">
                    <label>Warehouse Code</label>
                    <input name="warehouse_code" type="text" placeholder="Type Here" required>

                  </div>

                  <div class="input-field">
                    <label>Warehouse Name</label>
                    <input name="name" type="text" placeholder="Type Here" required>
                  </div>


                  <div class="input-field">
                    <label>Adddress</label>
                    <input name="address" type="text" placeholder="Type Here">
                  </div>

                  <div class="input-field">
                    <label>Capacity</label>
                    <input name="capacity" type="text" placeholder="Type Here">
                  </div>

                  <div class="input-field w-100">
                    <a class="locBtn"  onclick="getLocationConstant()" >GET YOUR GPS LOCATION</a>
                  </div>
             
                  <div class="input-field">
                    <label>Lattitude</label>
                    <input type="text" id="Latitude" name="latitude" value="">
                  </div>

                  <div class="input-field">
                  <label>Longitude</label>
                    <input type="text" id="Longitude" name="longitude" value="">
                  </div>

                  <div class="input-field">
                    <label>Fleet Center</label>
                    <input name="fleet_center" type="text" placeholder="Type Here">
                  </div>

                  <div class="input-field">
                    <label>Email Address</label>

                    <input name="email_address" type="text" placeholder="Type Here">

                  </div>

                  <div class="input-field">
                    <label>Contact Person</label>
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
                <span class="btnText"  >Create Warehouse</span>
              </button>
            </div>
          </form>

        </div>

      </div>

      <div class="card">Warehouse List



        <div class="container">

          <table>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Address</th>
              <th></th>
              <th></th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach($rows as $row) : 
              
              ?>
            
            <tr>

              <td><?php echo $row["warehouse_code"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["address"]; ?></td>
              <td><a class="viewBtn" href="#view"  >View</a></td> 
              <td><a class="delBtn" onclick="deleteWarehouse()" href="<?php echo BASEURL ?>/adminFunctions/deleteWarehouse/warehouse_code"> Delete</a></td>

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
<h3>Warehouse Details <a href="<?php echo BASEURL ?>/warehouse/createWarehouse">X</a></h3>
    
          <form action="<?php echo BASEURL ?>/warehouse/createWarehouse" method="POST">
        
            <div class="popup_card_fields">

                  <div class="popup_card_input">
                    <label>Warehouse Code</label>
                    <input name="warehouse_code" value = <?php echo $row["warehouse_code"]; ?> >
                  </div>
                  <div class="popup_card_input">
                    <label>Warehouse Name</label>
                    <input name="name" value = <?php echo $row["name"]; ?>>
                  </div>
                  <div class="popup_card_input">
                    <label>Address</label>
                    <input name="address" value = <?php echo $row["password"];?>>
                  </div>

                  <div class="popup_card_input">
                    <label>Capacity</label>

                    <input name="capacity" type="text" placeholder="Type Here">

                  </div>
                  
                  <div class="popup_card_input w-100">
                    <a class="locBtn"  onclick="getLocationConstant()" >GET YOUR GPS LOCATION</a>
                  </div>

                  <div class="popup_card_input">
                    <label>Latitude</label>
                    <input type="text" id="Latitude" name="latitude" value =<?php echo $row["latitude"];?>>
                  </div>

                  <div class="popup_card_input">
                  <label>Longitude</label>
                    <input type="text" id="Longitude" name="longitude" value =<?php echo $row["longitude"];?>>
                  </div>

                  <div class="popup_card_input">
                    <label>Fleet Center</label>
                    <input name="fleet_center" type="text" placeholder="Type Here">
                  </div>



                  <div class="popup_card_input">
                    <label>Email Address</label>

                    <input name="email_address" type="text" placeholder="Type Here">

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
          
        
        <a class="closeBtn" href="<?php echo BASEURL ?>/adminFunctions/warehouse">Close</a>

        </form>

      </div>

    </div>

  </div>

  
  
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




  </body>

  </html>



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