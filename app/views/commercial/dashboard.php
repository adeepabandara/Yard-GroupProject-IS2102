<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM expense_category");

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>


<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
<<<<<<< Updated upstream
  <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspExpense Category </header>
=======

  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar">




  </header>
>>>>>>> Stashed changes


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?> /images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
<<<<<<< Updated upstream
      <li class="sidenav__list-item" <a href="<?php echo BASEURL ?>/welcome">Dashboard</li>
      <li class="sidenav__list-item">Expense Category</li>
      <li class="sidenav__list-item">Supplier</li>
      <li class="sidenav__list-item">Driver</li>
      <li class="sidenav__list-item"><<a href="<?php echo BASEURL ?>/home">Sign Out</a></li>
=======
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/commercial">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expense_record">Expense Record</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/customer">Customer</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
>>>>>>> Stashed changes
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Expense Category</h2>
    </div>


<<<<<<< Updated upstream

    <div class="main-cards">
      <div class="card">
        <div class="card-headline">
          <h4>Category</h4>
          <div class="add-btncontainer">
            <button class="viewBtn" id="openCategoryBtn"> Add +</button>
          </div>
        </div>
        <div class="searchBar">
          <input type="text" name="search" placeholder="Search Category" class="card-searchbar">
        </div>
        <div class="container">

        </div>

        <table>
          <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
            <th></th>

          </tr>
          <?php $i = 1; ?>
          <?php foreach ($rows as $row) :

          ?>

            <tr>

              <td><?php echo $row["category_code"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["description"]; ?></td>

              <td>

                <button class="viewBtn">
                  <span class="btnText">Edit</span>
                </button>
              </td>
              <td>

                <button class="delBtn">
                  <span class="btnText">Select</span>
                </button>
              </td>


            </tr>
          <?php endforeach; ?>
        </table>

      </div>

      <div class="card">
        <div class="card-headline">
          <h4>Sub Category</h4>
          <div class="add-btncontainer">
            <button class="viewBtn" id="openCategoryBtn"> Add +</button>
          </div>
        </div>
        <div class="searchBar">
          <input type="text" name="search" placeholder="Search Sub Category" class="card-searchbar">
        </div>
        <div class="container">

        </div>

        <table>
          <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
            <th></th>

          </tr>
          <!-- <?php $i = 1; ?>
          <?php foreach ($rows as $row) :

          ?>

            <tr>

              <td><?php echo $row["category_code"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["description"]; ?></td>

              <td>

                <button class="viewBtn">
                  <span class="btnText">Edit</span>
                </button>
              </td>
              <td>

                <button class="delBtn">
                  <span class="btnText">Select</span>
                </button>
              </td>


            </tr>
          <?php endforeach; ?> -->
        </table>

      </div>
    </div>

    <table>
      <!-- <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Description</th>
        <th></th>
        <th></th>

      </tr>
      <tr>
        <td>101</td>
        <td>Dehiwala</td>
        <td>No20,Galle Rd,Dehiwala</td>

        <td>

          <button class="viewBtn">
            <span class="btnText">Edit</span>
          </button>
        </td>
        <td>

          <button class="delBtn">
            <span class="btnText">Select</span>
          </button>
        </td>

      </tr>
      <tr>
        <td>101</td>
        <td>Dehiwala</td>
        <td>No20,Galle Rd,Dehiwala</td>
        <td>

          <button class="viewBtn">
            <span class="btnText">Edit</span>
          </button>
        </td>
        <td>

          <button class="delBtn">
            <span class="btnText">Select</span>
          </button>
        </td>
      </tr>
      <tr>
        <td>101</td>
        <td>Dehiwala</td>
        <td>No20,Galle Rd,Dehiwala</td>
        <td>

          <button class="viewBtn">
            <span class="btnText">Edit</span>
          </button>
        </td>
        <td>

          <button class="delBtn">
            <span class="btnText">Select</span>
          </button>
        </td>
      </tr> -->
    </table>
</div>
</div>


<section class="categoryModalBox" id="categoryModal">
  <div class="categoryModalContent">
    <span class="material-symbols-rounded" id="closeCategoryModal">
      X
    </span>
    <h3>Add Category</h3>
    <form action="<?php echo BASEURL ?>/commercial/createExpenseCat" method="POST">
      
    <ul>
        <li class="form-top">
          <div class="category-code">
            <label for="category-code">Category Code</label>
            <input type="text" id="category-code" name="category_code" placeholder="0001" />
          </div>

          <div class="category-name">
            <label for="category-name">Category Name</label>
            <input type="text" id="category-name" name="name" placeholder="Category Name" />
          </div>
        </li>
        <li class="form-top">
        <div class="category-name"><label for="description">Description</label>
          <input type="text" id="description" name="description" placeholder="Description" />
        </li>
        <li class="modal-buttons">
          <button type="button" class="delete-btn">Cancel</button>
          <button class="modal-add-btn">Add</button>
        </li>
      </ul>
        
    </form>
  </div>
</section>
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
=======
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
>>>>>>> Stashed changes

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

  closeCategoryModal.onclick = function() {
    categoryModal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == categoryModal) {
      categoryModal.style.display = "none";
    }
  }
</script>

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


<<<<<<< Updated upstream

<div class="input-field">
  <label>Occupation</label>
  <input type="text" placeholder="Enter your ccupation" required>
</div>


-->
=======
</body>

</html>
>>>>>>> Stashed changes
