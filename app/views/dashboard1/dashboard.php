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

  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">




</header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/commercial">Expense Category</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/fleetCenter">Supplier</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/adminFunctions/commercial">Driver</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Welcome User !</h2>

    </div>

    <div class="main-cards">


      <div class="card">Sales<h2>Rs.450,000</h2></div>
      <div class="card">Purchases<h2>Rs.450,000</h2></div>
      <div class="card">Expenses<h2>Rs.450,000</h2></div>
      

</div>


<div class="main-cards">
  <div class="card">

    <img src="images/1.png"  width="100%">


  </div>
  <div class="card">

    <img src="images/2.png" width="100%">
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

</div>









  </body>

  </html>

