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
      <li class="sidenav__list-item">Product</li>
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
          <form name="create_product_form" action="<?php echo BASEURL ?>/warehouse/createProduct" method="POST">
            <div class="form first">
              <div class="details personal">

                <div class="fields">
                  <div class="input-field">
                    <label>Product Code *</label>
                    <input type="text" id="firstname" name="product_code" placeholder="Type Here..."
                      required="required" />
                  </div>

                  <div class="input-field">
                    <label>Bar Code *</label>
                    <input type="text" id="lastname" name="bar_code" placeholder="Type Here..." />
                  </div>


                  <div class="input-field w-100">
                    <label>Product Name *</label>
                    <input type="text" id="product_name" name="name" placeholder="Type Here..." required="required">
                  </div>

                  <div class="input-field w-100">
                    <label>Add Category</label>
                    <div class="row">
                      <input type="text" class="w-100" id="category" name="category" placeholder="Type Here...">
                      <button type="button" id="add_category_button" class="button_plus">+</button>
                    </div>
                  </div>

                  <div class="input-field w-100">
                    <label for="name">Add Sub Category </label>
                    <div class="row">
                      <input type="text" id="sub_category" name="sub_category" class="w-100"
                        placeholder="Type Here...">
                      <button type="button" id="add_category_button2" class="button_plus">+</button>
                    </div>
                  </div>

                  <div class="input-field">
                    <label>Opening Stock </label>
                    <input type="text" id="opening_stock" name="opening_stock" placeholder="Type Here...">
                  </div>

                  <div class="input-field">
                    <label for="count">Re Order Level </label>
                    <input type="text" id="reorder_level" name="reorder_level" placeholder="Type Here...">

                  </div>

                  <div class="input-field">
                    <label for="price">Purchase Price </label>
                    <input type="text" id="purchase_price" name="purchase_price" placeholder="Type Here...">

                  </div>

                  <div class="input-field">
                    <label for="price">Selling Price </label>
                    <input type="text" id="selling_price" name="selling_price" placeholder="Type Here...">

                  </div>

                  <div class="input-field w-100">
                    <label>Upload Documents </label>
                    <div class="drag-area">
                      <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>

                      <input type="file" name="image" id="myfile" class="w-100">
                    </div>
                  </div>
                </div>
                <button class="subBtn" type="button" onclick="submitForm()">
                  <span class="btnText">Add Product</span>
                </button>
              </div>
            </div>
          </form>
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
              <td><a class="viewBtn"  href="#view"> View</a></td>
              <td><a class="delBtn"  > Delete</a></td>

            </tr>
            <?php endforeach; ?>

        </div>
      </div>
    </div>
</div>
</div>
</div>

<div id="add_category" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 class="add-category-title">Add Category</h1>

  <form action="<?php echo BASEURL ?>/warehouse/createCategory" method="POST">
    <div >
      <div >
        <label for="no" class="label-title">Category ID *</label>
        <input type="text" id="no" name= "product_category_code" class="form-input" placeholder="Type Here..." required="required">
      </div>

      <div class="form-group right">
        <label for="name" class="label-title">Category Name * </label>
        <input type="text" id="cname" name= "name" class="form-input" placeholder="Type Here..." required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="name" class="label-title">Description</label>
      <input type="text" id="name" name= "description" class="form-input" placeholder="Type Here...">
    </div>

    <div style="text-align: center;"><button class="button_normal">Add Category</button></div>
  </form> 
  </div>

</div>

<div id="add_category2" class="modal1">
  <div class="modal1-content">
    <span class="close2">&times;</span>
    <h1 class="add-category-title">Add Sub Category</h1>

    <div class="horizontal-group">
      <div class="form-group left">
        <label for="no" class="label-title">Sub Category ID *</label>
        <input type="text" id="no" class="form-input" placeholder="Type Here..." required="required">
      </div>

      <div class="form-group right">
        <label for="name" class="label-title">Sub Category Name * </label>
        <input type="text" id="name" class="form-input" placeholder="Type Here..." required="required">
      </div>
    </div>

    <div class="form-group">
      <label for="name" class="label-title">Description</label>
      <input type="text" id="name" class="form-input" placeholder="Type Here...">
    </div>
    <div style="text-align: center;"><button class="button_normal">Add Sub Category</button></div>
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