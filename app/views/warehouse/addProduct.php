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

  <header class="header">Dashboard<img src="<?php echo BASEURL ?>/images/img_avatar.png" class="avatar"></header>


  <!--Sidebar-->

  

  <div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link-on" class="active" href="<?php echo BASEURL ?>/welcome/warehouse"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Product
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container-on">
    <a class="link-drop-on" href="<?php echo BASEURL ?>/warehouse/Product">Add Product</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/category">Category</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/brand">Brand</a>
  </div>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Purchase Requsition
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/createPr">Create PR</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/prList">View PR</a>
  </div>


  <a class="link" href="<?php echo BASEURL ?>/warehouse/grn"><i class='bx bxs-truck'></i>&nbsp GRN</a>
  <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Requistions</a>
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



<!--Main-Content-->

  <main class="main">


    <div class="main-header">
      <h2>Add Product</h2>
    </div>

    <div class="main-cards">

    <!--Card 1-->

      <div class="card">Add Product
        <div class="container">

          <form action="<?php echo BASEURL ?>/warehouse/createProduct" method="POST">
            <div>
              <div>
                <div class="fields">

                  <div class="input-field">
                    <label>Product Code *</label>

                    

                    <input type="text" id="code" name="product_code" placeholder="Type Here..." value="warehouse_code"required>
                    <span id="code-error" class="hide required-color error-message">Must be 4 numbers</span>
                    <span id="code-empty" class="hide required-color error-message">Product Code Cannot Be Empty</span>
                  </div>


                  <div class="input-field">
                    <label>Bar Code *</label>
                    <input type="text" name="bar_code" placeholder="Type Here...">
                  </div>


                  <div class="input-field ">
                    <label>Product Name *</label>
                    <input type="text" id="name" name="name" placeholder="Type Here..." required>
                    <span id="name-error" class="hide required-color error-message">Invalid Input</span>
                    <span id="name-empty" class="hide required-color error-message">Name Cannot Be Empty</span>
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
                <button id="submit-button" class="subBtn" onclick="save()">Add Product</button>

              </div>
          </form>
        </div>
      </div>
    </div>




    <!--Card 2-->
    <div class="card">Product List
      <div class="container">
        <table>
          <div class="container">
            <table id="myTable">

          <?php

          $path = BASEURL;

          echo "<table>";
          echo "<tr>";
          echo "<th> Code </th>";
          echo "<th>Name</th>";
          echo "<th>Address</th>";
          echo "<th></th>";
          echo "<th></th>";
          while ($row = $data['result']->fetch_assoc()) {

            $wc = $row['product_code'];

            echo "<tr>";
            echo "<td>" . $row["product_code"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td><a class='viewBtn' onclick='abc(\"$wc\")'  href='#view' >View</a></td>";

            echo "<td><a class='delBtn' href=" . BASEURL . "/warehouse/deleteProduct/" . $row["product_code"] . "> Delete</a></td>";
            echo "</tr>";
          }
          echo "</table>";
          ?>

              </div>
          </div>
      </div>
    </div>
</div>
</div>



 <!--Pop-up Modal - Add category -->

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


            <input type="text" id="code1" name="product_category_code" placeholder="Type Here..." required>
            <span id="code-error1" class="hide required-color error-message">Must be 4 numbers</span>
            <span id="code-empty1" class="hide required-color error-message">Category ID Cannot Be Empty</span>

            <input type="text" name="product_category_code" placeholder="Type Here..." required="required">


          </div>

          <div class="popup_card_input">
            <label>Category Name * </label>


            <input type="text" id="name1" name="name" class="form-input" placeholder="Type Here..." required>
            <span id="name-error1" class="hide required-color error-message">Invalid Input</span>
            <span id="name-empty1" class="hide required-color error-message">Name Cannot Be Empty</span>
          </div>

          <div class="popup_card_input">


            <input type="text" name="name" class="form-input" placeholder="Type Here..." required="required">
          </div>

          <div class="popup_card_input w-100 ">



            <label>Description</label>
            <input type="textarea" name="description" placeholder="Type Here...">
          </div>


          <button class="subBtn">Add Category</button>
        </div>

        <button id="submit-button1" class="subBtn" onclick="save()">Add Category</button>
    </div>

    <button class="subBtn">Add Category</button>
  </div>

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



<script>
  //ID
  let codeInput = document.getElementById("code");
  let codeError = document.getElementById("code-error");
  let emptyCodeError = document.getElementById("code-empty");

  //ID-category-pop
  let codeInput1 = document.getElementById("code1");
  let codeError1 = document.getElementById("code-error1");
  let emptyCodeError1 = document.getElementById("code-empty1");

  //Name
  let nameInput = document.getElementById("name");
  let nameError = document.getElementById("name-error");
  let emptyNameError = document.getElementById("name-empty");

  //Name-category-pop
  let nameInput1 = document.getElementById("name1");
  let nameError1 = document.getElementById("name-error1");
  let emptyNameError1 = document.getElementById("name-empty1");

  //Submit
  let submitButton = document.getElementById("submit-button");

  //Submit
  let submitButton1 = document.getElementById("submit-button1");

  //Valid
  let validClasses = document.getElementsByClassName("valid");
  let invalidClasses = document.getElementsByClassName("error");

  //Text verification (if input contains only text)
  const textVerify = (text) => {
    const regex = /^[a-zA-Z]{3,}$/;
    return regex.test(text);
  };

  //ID verification
  const codeVerify = (number) => {
    const regex = /^[0-9]{4}$/;
    return regex.test(number);
  };


  //For empty input - accepts(input,empty error for that input and other errors)
  const emptyUpdate = (
    inputReference,
    emptyErrorReference,
    otherErrorReference
  ) => {
    if (!inputReference.value) {
      //input is null/empty
      emptyErrorReference.classList.remove("hide");
      otherErrorReference.classList.add("hide");
      inputReference.classList.add("error");
    } else {
      //input has some content
      emptyErrorReference.classList.add("hide");
    }
  };

  //For error styling and displaying error message
  const errorUpdate = (inputReference, errorReference) => {
    errorReference.classList.remove("hide");
    inputReference.classList.remove("valid");
    inputReference.classList.add("error");
  };

  //For no errors
  const validInput = (inputReference) => {
    inputReference.classList.remove("error");
    inputReference.classList.add("valid");
  };

  //ID
  codeInput.addEventListener("input", () => {
    if (codeVerify(codeInput.value)) {
      //If verification returns true
      codeError.classList.add("hide");
      validInput(codeInput);
    } else {
      //for false
      errorUpdate(codeInput, codeError);
      //empty checker
      emptyUpdate(codeInput, emptyCodeError, codeError);
    }
  });


  //ID-category
  codeInput1.addEventListener("input", () => {
    if (codeVerify(codeInput1.value)) {
      //If verification returns true
      codeError1.classList.add("hide");
      validInput(codeInput1);
    } else {
      //for false
      errorUpdate(codeInput1, codeError1);
      //empty checker
      emptyUpdate(codeInput1, emptyCodeError1, codeError1);
    }
  });

  //Name
  nameInput.addEventListener("input", () => {
    if (textVerify(nameInput.value)) {
      nameError.classList.add("hide");
      validInput(nameInput);
    } else {
      errorUpdate(nameInput, nameError);
      emptyUpdate(nameInput, emptyNameError, nameError);
    }
  });

  //Name-category-pop
  nameInput1.addEventListener("input", () => {
    if (textVerify(nameInput1.value)) {
      nameError1.classList.add("hide");
      validInput(nameInput1);
    } else {
      errorUpdate(nameInput1, nameError1);
      emptyUpdate(nameInput1, emptyNameError1, nameError1);
    }
  });

  //Submit button
  submitButton.addEventListener("click", () => {
    if (validClasses.length == 2 && invalidClasses.length == 0) {
      alert("Success");
    } else {
      alert("Error");
    }
  });

  //Submit button
  submitButton1.addEventListener("click", () => {
    if (validClasses.length == 2 && invalidClasses.length == 0) {
      alert("Success");
    } else {
      alert("Error");
    }
  });
</script>



</div>
</form>


</div>


</div>

 <!--Pop-up Modal - View Product -->

<div class="overlay" id="view">

  <div class="popup-main-cards">


    <div class="popup_card">
      <h3>Product Details <a href="<?php echo BASEURL ?>/warehouse/product">X</a></h3>
      <form action="<?php echo BASEURL ?>/warehouse/createProduct" method="POST">

        <div class="popup_card_fields">
          <div class="popup_card_input">
            <label>Product Code </label>
            <input id="product_code" name="product_code" type="text">
          </div>

          <div class="popup_card_input">
            <label>Bar Code</label>
            <input name="bar_code" id="bar_code" type="text">
          </div>

          <div class="popup_card_input">
            <label>Product Name</label>
            <input name="name" id="name" type="text">
          </div>

          <div class="popup_card_input">
            <label>Category</label>
            <input name="category" id="category" type="text">
          </div>

          <div class="popup_card_input">
            <label>Opening Stock</label>
            <input name="opening_stock" id="opening_stock" type="text">
          </div>

          <div class="popup_card_input">
            <label>Re Order Level</label>
            <input name="reorder_level" id="reorder_level" type="text">
          </div>

          <div class="popup_card_input">
            <label>Purchase Price</label>
            <input name="purchase_price" id="purchase_price" type="text">
          </div>

          <div class="popup_card_input">
            <label>Selling Price</label>
            <input name="selling_price" id="selling_price" type="text">
          </div>


          <button class="deleteBtn" onclick="createProduct()">
            <span class="btnText">Delete</span>
          </button>
          <button class="subBtn" onclick="createProduct()">
            <span class="btnText">Update</span>
          </button>


          <a class="closeBtn" href="<?php echo BASEURL ?>/warehouse/product">Close</a>

      </form>

    </div>

  </div>

</div>

<script>
      function abc(product_code) {
        var url = '<?php echo "$path/warehouse/getProduct/" ?>' + product_code;
        console.log(url);
        fetch(url)
          .then((response) => response.json())
          .then((json) => {
            console.log(json);
            console.log(json[0].product_code);
            document.getElementById("product_code").value = json[0].product_code;
            document.getElementById("name").value = json[0].name;
            document.getElementById("bar_code").value = json[0].bar_code;
            document.getElementById("category").value = json[0].category;
            document.getElementById("opening_stock").value = json[0].opening_stock;
            document.getElementById("Reoder_level").value = json[0].Reoder_level;
            document.getElementById("purchase_price").value = json[0].purchase_price;
            document.getElementById("selling_price").value = json[0].selling_price;

 

          })

      };
    </script>



<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }


  }
</script>

<script>
  function save() {
    var userPreference;

    if (confirm("Are you sure?") == true) {
      userPreference = "Data saved successfully!";
    } else {
      userPreference = "Save Canceled!";
    }

    document.getElementById("msg").innerHTML = userPreference;
  }
</script>





<script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
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

</html>