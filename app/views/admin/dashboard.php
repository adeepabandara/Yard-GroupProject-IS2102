<<<<<<< Updated upstream
=======
<!DOCTYPE html>
<script defer src="active.js"></script>

>>>>>>> Stashed changes
<?php

session_start();

if (isset($_SESSION['username'])) {
<<<<<<< Updated upstream
 // echo $_SESSION['username'];
=======
  // echo $_SESSION['username'];
>>>>>>> Stashed changes

} else {
  echo '<br>You are not logged in';
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<<<<<<< Updated upstream
<div class="grid-container">

  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">
=======
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<div class="grid-container">

  <header class="header">Dashboard <!--<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">-->
>>>>>>> Stashed changes




</header>


<<<<<<< Updated upstream
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
=======
<div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link-on" class="active" href="<?php echo BASEURL ?>/welcome/admin"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Warehouse
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/adminFunctions/viewWarehouse">Add Warehouse</a>
    <a class="link-drop" href="#">View Warehouse</a>
  </div>


  <a class="link" href="#clients"><i class='bx bxs-truck'></i>&nbsp Fleet Center</a>
  <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Commercial</a>
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
>>>>>>> Stashed changes

  <main class="main">
    <div class="main-header">
      <h2>Welcome Adeepa !</h2>

    </div>

    <div class="main-cards">


      <div class="card">Sales<h2>Rs.450,000</h2></div>
      <div class="card">Purchases<h2>Rs.450,000</h2></div>
      <div class="card">Expenses<h2>Rs.450,000</h2></div>
      <div class="card">Most Selling<h2>Rs.450,000</h2> </div>
      <div class="card">Most Valuable Customer<h2>Rs.450,000</h2></div>

</div>


<div class="main-cards">
  <div class="card">

<<<<<<< Updated upstream
    <img src="images/1.png"  width="100%">
=======
    <img src="<?php echo BASEURL ?>/images/1.png"  width="100%">
>>>>>>> Stashed changes


  </div>
  <div class="card">

<<<<<<< Updated upstream
    <img src="images/2.png" width="100%">
=======
    <img src="<?php echo BASEURL ?>/images/2.png" width="100%">
>>>>>>> Stashed changes
  </div>

  </div>

  
<div class="main-cards">
  <div class="card">

    <table>
      <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
    </table> 
    
  </div>

  </div>

<<<<<<< Updated upstream
</div>









  </body>
=======



  </body>


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


 
>>>>>>> Stashed changes

  </html>

