<!DOCTYPE html>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}



?>




<script type="text/javascript">
  function getLocationConstant() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
    } else {
      alert("Your browser or device doesn't support Geolocation");
    }
  }

  // If we have a successful location update
  function onGeoSuccess(event) {
    document.getElementById("Latitude").value = event.coords.latitude;
    document.getElementById("Longitude").value = event.coords.longitude;

  }

  // If something has gone wrong with the geolocation request
  function onGeoError(event) {
    alert("Error code " + event.code + ". " + event.message);
  }
</script>




<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<div class="grid-container">

  <header class="header">Admin&nbsp>&nbsp Warehouse<div><a id="MyClockDisplay" class="clock"
        onload="showTime()"></a>&nbsp&nbsp&nbsp<img src="<?php echo BASEURL ?>/images/img_avatar.png"
        class="avatar"></a></div>
  </header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/viewWarehouse">Warehouse</li>
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
            <form action="<?php echo BASEURL ?>/adminFunctions/viewWarehouse" method="POST" id="form">
              <div>
                <div>


                  <div class="fields">


                    <div class="input-field">
                      <label>Warehouse Code</label>

                      <input name='warehouse_code' type='text' placeholder='Type Here' value=>

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



                    <div class="popup_card_input w-100">
                  <a class="locBtn" href="#one">Open Map</a>
                </div>


                    <div class="input-field w-100">
                      <a class="locBtn" onclick="getLocationConstant()">GET YOUR GPS LOCATION</a>
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

                <button class="subBtn" onclick="createWarehouse()" type="submit">
                  <span class="btnText">Create Warehouse</span>

                </button>
              </div>
            </form>

        </div>

      </div>

      <div class="card">Warehouse List


        <div class="container">
          <?php

          $path = BASEURL;

          echo "<table>";
          echo "<tr>";
          echo "<th> Code </th>";
          echo "<th>Name</th>";
          echo "<th>Address</th>";
          echo "<th></th>";
          echo "<th></th>";

          echo "</tr>";
          while ($row = $data['result']->fetch_assoc()) {

            $wc = $row['warehouse_code'];

            echo "<tr>";
            echo "<td>" . $row["warehouse_code"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td><a class='viewBtn' onclick='abc(\"$wc\")'  href='#view' >View</a></td>";

            echo "<td><a class='delBtn' href=" . BASEURL . "/adminFunctions/deleteWarehouse/" . $row["warehouse_code"] . "> Delete</a></td>";
            echo "</tr>";
          }
          echo "</table>";

          ?>

        </div>

      </div>



      <div class="overlay" id="view">


        <div class="popup-main-cards">
        <div class="popup_card">
                
        <h3>Warehouse Details <a href="<?php echo BASEURL ?>/adminFunctions/viewWarehouse">X</a></h3>

          <form action="<?php echo BASEURL ?>/adminFunctions/editWarehouse" method="POST">

            <div class="popup_card_fields">
           

                <div class="popup_card_input">
                  <label>Warehouse Code</label>
                  <input id="warehouse_code" name="warehouse_code" type='text' ?>
                </div>

                <div class="popup_card_input">
                  <label>Name</label>
                  <input id="name" name="name" type='text' ?>
                </div>

                <div class="popup_card_input">
                  <label>Address</label>
                  <input id="address" name="address">
                </div>

                <div class="popup_card_input">
                  <label>Capacity</label>
                  <input id="capacity" name="capacity" type="text" placeholder="Type Here">
                </div>

              

                <div class="popup_card_input w-100">
                  <a class="locBtn" onclick="getLocationConstant()">GET YOUR GPS LOCATION</a>
                </div>

                <div class="popup_card_input">
                  <label>Latitude</label>
                  <input id="latitude" type="text" name="latitude">
                </div>

                <div class="popup_card_input">
                  <label>Longitude</label>
                  <input id="longitude" type="text" name="longitude">
                </div>

                <div class="popup_card_input">
                  <label>Contact Person</label>
                  <input id="cp_name" name="cp_name" type="text" placeholder="Type Here">
                </div>

                <div class="popup_card_input">
                  <label>Contact Number</label>
                  <input id="cp_number" name="cp_number" type="text" placeholder="Type Here">
                </div>

                <div class="popup_card_input">
                  <label>Fleet Center</label>
                  <input id="fleet_center" name="fleet_center" type="text" placeholder="Type Here">
                </div>

                <div class="popup_card_input">
                  <label>Email Address</label>
                  <input id="email_address" name="email_address" type="text" placeholder="Type Here">
                </div>

                <div class="popup_card_input">
                  <label>Username</label>
                  <input id="username" name="username">
                </div>

                <div class="popup_card_input">
                  <label>Password</label>
                  <input id="password" name="password">
                </div>

                <button class="deleteBtn" >
                  <span class="btnText">Delete</span>
                </button>

                <button class="subBtn" type="submit">
                  <span class="btnText">Update</span>
                </button>
        </form>

              </div>
            </div>

            <div class="popup_card_fields">

          
        </div>

      </div>

    </div>

    </section>
    

    <div class="overlay" id="one">


<div class="popup-main-cards">
<div class="popup_card">



    <h1>Select a location!</h1>
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
        <!--map div-->
        <div id="map"></div>
        
        <!--our form-->
        <h2>Chosen Location</h2>
        <form method="post">
            <input type="text" id="lat" readonly="yes"><br>
            <input type="text" id="lng" readonly="yes">
        </form>

        <script type="text/javascript" src="map.js"></script>
</div>
</div>





































    <script>
      function abc(warehouse_code) {
        var url = '<?php echo "$path/warehouse/getWarehouse/" ?>' + warehouse_code;
        console.log(url);
        fetch(url)
          .then((response) => response.json())
          .then((json) => {
            console.log(json);
            console.log(json[0].warehouse_code);
            document.getElementById("warehouse_code").value = json[0].warehouse_code;
            document.getElementById("name").value = json[0].name;
            document.getElementById("address").value = json[0].address;
            document.getElementById("capacity").value = json[0].capacity;
            document.getElementById("latitude").value = json[0].latitude;
            document.getElementById("longitude").value = json[0].longitude;
            document.getElementById("cp_name").value = json[0].cp_name;
            document.getElementById("cp_number").value = json[0].cp_number;
            document.getElementById("fleet_center").value = json[0].fleet_center;
            document.getElementById("email_address").value = json[0].email_address;
            document.getElementById("username").value = json[0].username;
            document.getElementById("password").value = json[0].password;
 

          })

      };
    </script>

<script>












      </script>