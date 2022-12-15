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


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">

  <header class="header"> Admin&nbsp&nbsp>&nbsp&nbspAdd Warehouse </header>


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
          <form action="<?php echo BASEURL ?>/warehouse/createWarehouse" method="POST">
            <div class="form first">
              <div class="details personal">


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
                    <label>Fleet Center</label>
                    <input name="fleet_center" type="text" placeholder="Type Here">
                  </div>



                  <div class="input-field">
                    <label>Email Address</label>

                    <input name="email_address" type="text" placeholder="Type Here">

                  </div>

                  <div class="input-field">
                    <label>Capacity</label>

                    <input name="capacity" type="text" placeholder="Type Here">

                  </div>
                  <div class="input-field">
                    <label>Username</label>
                    <input name="username" type="text" placeholder="Type Here" required>
                  </div>
                  <div class="input-field">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Type Here" required>
                  </div>
                </div>
              </div>
              <button class="subBtn">
                <span class="btnText">Create Warehouse</span>
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
            <?php foreach($rows as $row) : ?>
            <tr>

              <td><?php echo $row["warehouse_code"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["address"]; ?></td>
              <td><button class="viewBtn" href="<?php echo BASEURL ?>/view/viewwareouse"><span>View</span></button></td>
              <td><button class="delBtn"><span>Delete</span></button></td>

            </tr>
            <?php endforeach; ?>

        </div>


      </div>

    </div>

</div>

</main>

</div>

</div>







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