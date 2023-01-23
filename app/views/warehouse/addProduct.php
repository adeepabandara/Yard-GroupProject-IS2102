<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM product");

?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
  <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbspProduct </header>

  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/warehouse">Dashboard</a></li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/warehouse/product">Product</a></li>
      <li class="sidenav__list-item">Category</li>
      <li class="sidenav__list-item">Inventory</li>
      <li class="sidenav__list-item">Stock Adjustment</li>
      <li class="sidenav__list-item">Purchase Requisition</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Add Product</h2>
    </div>

    <div class="main-cards">

      <div class="card">Add Product

        <div class="container">
          <form action="<?php echo BASEURL ?>/warehouse/createProduct" method="POST">
            <div>
              <div>

                <div class="fields">

                  <div class="input-field">
                    <label>Product Code</label>
                    <input type="text" name="product_code" placeholder="Type Here..." required="required" />
                  </div>

                  <div class="input-field">
                    <label>Bar Code</label>
                    <input type="text" name="bar_code" placeholder="Type Here..." />
                  </div>

                  <div class="input-field ">
                    <label>Product Name</label>
                    <input type="text" name="name" placeholder="Type Here..." required="required">
                  </div>

                  <div class="input-field">
                    <label>Add Category</label>
                    <div class="input-row">
                      <input type="text" name="category" placeholder="Type Here...">
                      <a type="button" class="add-button" href="#addCategory_Modal">+</a>

                    </div>
                  </div>


                  <div class="input-field">
                    <label>Opening Stock </label>
                    <input type="text" name="opening_stock" placeholder="Type Here...">
                  </div>


                  <div class="input-field">
                    <label for="count">Re Order Level </label>
                    <input type="text" name="reorder_level" placeholder="Type Here...">
                  </div>


                  <div class="input-field">
                    <label for="price">Purchase Price </label>
                    <input type="text" name="purchase_price" placeholder="Type Here...">
                  </div>


                  <div class="input-field">
                    <label for="price">Selling Price </label>
                    <input type="text" name="selling_price" placeholder="Type Here...">
                  </div>

                </div>

                <button class="subBtn">Add Product</button>


              </div>
          </form>
        </div>
      </div>
    </div>





    <div class="card">Product List
      <div class="container">

        <table>
          <tr>
            <th>Code</th>
            <th>Name</th>
            <th></th>
            <th></th>
          </tr>
          <?php $i = 1; ?>
          <?php foreach ($rows as $row):
            ?>
          <tr>
            <td>
              <?php echo $row["product_code"]; ?>
            </td>
            <td>
              <?php echo $row["name"]; ?>
            </td>
            <td><a class="viewBtn" href="#view"> View</a></td>
            <td><a class="delBtn"> Delete</a></td>

          </tr>
          <?php endforeach; ?>

      </div>
    </div>
</div>
</div>
</div>
</div>

<div class="overlay" id="addCategory_Modal">

  <div class="popup-main-cards">
  

    <div class="popup_card">
      

    <div class="close-icon"> <a href="<?php echo BASEURL ?>/warehouse/product">X</a></div>
    <h3>Add Category</h3>
    
   

      <form action="<?php echo BASEURL ?>/warehouse/createCategory" method="POST">

        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID </label>
            <input type="text" name="product_category_code" placeholder="Type Here..." required="required">
          </div>

          <div class="popup_card_input">
            <label>Category Name * </label>
            <input type="text" name="name" class="form-input" placeholder="Type Here..." required="required">
          </div>

        <div class="popup_card_input w-100 ">
          <label >Description</label>
          <input type="textarea" name="description"  placeholder="Type Here...">
        </div>

        <button class="subBtn">Add Category</button></div>
      </form>


    </div>

  </div>



</body>
          




  <script>
    function validateForm() {
      // Validate product code
      var product_code = document.forms["create_product_form"]["product_code"].value;
      if (product_code == "") {
        alert("Product code must be filled out");
        return false;
      } else if (product_code.length != 4) {
        alert("Product code must be 5 characters");
        return false;
      } else if (isNaN(product_code)) {
        alert("Product code must be a number");
        return false;
      }

      // Validate bar code
      var bar_code = document.forms["create_product_form"]["bar_code"].value;
      if (bar_code == "") {
        alert("Bar code must be filled out");
        return false;
      } else if (bar_code.length != 12) {
        alert("Bar code must be 12 digits");
        return false;
      } else if (isNaN(bar_code)) {
        alert("Bar code must be a number");
        return false;
      }

      // Validate product name
      var product_name = document.forms["create_product_form"]["product_name"].value;
      if (product_name == "") {
        alert("Product name must be filled out");
        return false;
      } else if (product_name.length > 50) {
        alert("Product name must be less than 50 characters");
        return false;
      }





      // If all validations pass, submit the form
      return true;

    }

    function submitForm() {
      if (validateForm()) {
        document.forms["create_product_form"].submit();
      }
    }


    window.onload = function () {
      // Get the modal
      var modal = document.getElementById("add_category");

      // Get the button that opens the modal
      var btn = document.getElementById("add_category_button");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function () {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      // --------------------------------
      // Get the modal
      var modal1 = document.getElementById("add_category2");

      // Get the button that opens the modal
      var btn = document.getElementById("add_category_button2");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close2")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function () {
        modal1.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal1.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal1) {
          modal1.style.display = "none";
        }
      }

    }
  </script>



      </div>
      </form>

    </div>