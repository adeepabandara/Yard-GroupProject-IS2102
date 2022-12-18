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
  <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspExpense Category </header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?> /images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item" <a href="<?php echo BASEURL ?>/welcome">Dashboard</li>
      <li class="sidenav__list-item">Expense Category</li>
      <li class="sidenav__list-item">Supplier</li>
      <li class="sidenav__list-item">Driver</li>
      <li class="sidenav__list-item"><<a href="<?php echo BASEURL ?>/home">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Expense Category</h2>
    </div>



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



<div class="input-field">
  <label>Occupation</label>
  <input type="text" placeholder="Enter your ccupation" required>
</div>


-->