<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
  <header class="header"> Admin&nbsp&nbsp>&nbsp&nbspAdd Warehouse </header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
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
      <h2>Add Warehouse</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Warehouse
        <div class="container">
          <form action="#">
            <div class="form first">
              <div class="details personal">


                <div class="fields">
                  <div class="input-field">
                    <label>Warehouse Code</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>
                  <div class="input-field">
                    <label>Warehouse Name</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>
                  <div class="input-field">
                    <label>Adddress</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>

                  <div class="input-field">
                    <label>Fleet Center</label>
                    <select required>
                      <option disabled selected>Select Fleet Ceneter</option>
                      <option>Dehiwala</option>
                      <option>Galle</option>
                      <option>Colombo</option>
                    </select>
                  </div>

                  <div class="input-field">
                    <label>Contact Person</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>

                  <div class="input-field">
                    <label>Contact Number</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>

                  <div class="input-field">
                    <label>Email Address</label>

                    <input type="text" placeholder="Type Here" required>

                  </div>

                  <div class="input-field">
                    <label>Capacity</label>

                    <input type="text" placeholder="Type Here" required>

                  </div>
                  <div class="input-field">
                    <label>Username</label>
                    <input type="text" placeholder="Type Here" required>
                  </div>
                  <div class="input-field">
                    <label>Password</label>
                    <input type="password" placeholder="Type Here" required>
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
              </td>
            </tr>
          </table>
        </div>

















      </div>

    </div>

</div>








</main>

</div>







</body>

</html>


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