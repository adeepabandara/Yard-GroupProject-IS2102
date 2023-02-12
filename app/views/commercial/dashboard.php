<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<div class="grid-container">

  <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspExpense Category </header>


  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">





  </header>

</header>


<div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link-on" class="active" href="<?php echo BASEURL ?>/welcome/commercial"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
  </div>


  <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customer</a>
  <a class="link" href="<?php echo BASEURL ?>/commercial/purchaseOrder"><i class='bx bxs-file'></i>&nbsp Create PO</a>
  <button class="dropdown-btn"><i class='bx bxs-file' ></i>&nbsp Purchase
    <i class="fa fa-caret-down"></i>
  </button>
  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/viewPrList">View Requisition</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/viewPrProducts">View Requisition Details</a>
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
      <h2>Welcome User !</h2>

    </div>

    <div class="main-cards">


      <div class="card">Sales<h2>Rs.450,000</h2></div>
      <div class="card">Purchases<h2>Rs.450,000</h2></div>
      <div class="card">Expenses<h2>Rs.450,000</h2></div>
      

</div>

<div class="main-cards">
  <div class="card">

    <img src="<?php echo BASEURL ?>/images/3.png"  width="100%">


  </div>
  <div class="card">

    <img src="<?php echo BASEURL ?>/images/4.png" width="100%">
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

</main>
</div>
</body>
<script>
  let categoryModal = document.getElementById("categoryModal");
  let openCategoryBtn = document.getElementById("openCategoryBtn");
  let closeCategoryModal = document.getElementById("closeCategoryModal");;

  openCategoryBtn.onclick = function() {
    categoryModal.style.display = "block";
  }

      <div class="card">Sales<h2>Rs.450,000</h2>
      </div>
      <div class="card">Purchases<h2>Rs.450,000</h2>
      </div>
      <div class="card">Expenses<h2>Rs.450,000</h2>
      </div>


    </div>


    <div class="main-cards">
      <div class="card">

        <img src="images/1.png" width="100%">


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

<script>

  closeCategoryModal.onclick = function() {
    categoryModal.style.display = "none";
  }

</script>





  </body>



<div class="input-field">
  <label>Occupation</label>
  <input type="text" placeholder="Enter your ccupation" required>
</div>


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


</body>



