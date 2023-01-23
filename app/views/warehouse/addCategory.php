<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM product_category");
$rows1 = mysqli_query($conn, "SELECT * FROM product_sub_category");

?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
  <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbsp Category </header>


  <aside class="sidenav">
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/warehouse">Dashboard</a></li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/warehouse/product">Product</a></li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/warehouse/category">Category</a></li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/warehouse/brand">Brand</a></li>
      <li class="sidenav__list-item">Inventory</li>
      <li class="sidenav__list-item">Stock Adjustment</li>
      <li class="sidenav__list-item">Purchase Requisition</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Product Category</h2>
    </div>


    <div class="main-cards">
      <div class="card">Category
        <a href="#addCategory_Modal"> <button class="blue-add-btn-right"> Add +</button></a>
        <br>
        <input type="text" id="myInput" class="card-searchbar" onkeyup="myFunction()" placeholder="Search for categories.." >


        <div class="container">
          <table id="myTable">
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Description</th>
              <th></th>
              <th></th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach ($rows as $row):

            ?>

            <tr>
              <td><?php echo $row["product_category_code"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["description"]; ?></td>
              <td><a class="viewBtn" href="#view">View</a></td>
              <td>
                <button class="delBtn">
                  <span class="btnText">Delete</span>
                </button>
              </td>


            </tr>
            <?php endforeach; ?>
          </table>

        </div>
      </div>

      <div class="card"> Sub Category

       <a href="#addCategory_Modal1"><button class="blue-add-btn-right" id="openCategoryBtn"> Add +</button>
        <br>
        <input type="text" id="myInput1" class="card-searchbar" onkeyup="myFunction()" placeholder="Search for sub categories.." >
        <div class="container">


          <table id="myTable1">
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Description</th>
              <th></th>
              <th></th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach ($rows1 as $row1):

            ?>

            <tr>
              <td><?php echo $row1["product_sub_category_code"]; ?></td>
              <td><?php echo $row1["name"]; ?></td>
              <td><?php echo $row1["description"]; ?></td>
              <td><a class="viewBtn" href="#view">View</a></td>
              <td>
                <button class="delBtn">
                  <span class="btnText">Delete</span>
                </button>
              </td>


            </tr>
            <?php endforeach; ?>
          </table>

        </div>
      </div>


    </div>



</div>
</main>
</div>
</body>

</html>



<div class="overlay" id="addCategory_Modal">

  <div class="popup-main-cards">


    <h3>Add Category</h3>




    <div class="popup_card">


      <div class="close-icon"> <a href="<?php echo BASEURL ?>/warehouse/category">X</a></div>
      <h3>Add Category</h3>


      <form id="form" action="<?php echo BASEURL ?>/warehouse/createCategory1" method="POST">
        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID* </label>
            <input type="text" id="code" name="product_category_code" placeholder="Type Here..." required>
            <span id="code-error" class="hide required-color error-message" >Must be 4 numbers</span>
            <span id="code-empty" class="hide required-color error-message" >Brand ID Cannot Be Empty</span>
          </div>

          <div class="popup_card_input">
            <label>Category Name* </label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Type Here..." required>
            <span id="name-error" class="hide required-color error-message" >Invalid Input</span>
            <span id="name-empty" class="hide required-color error-message" >Name Cannot Be Empty</span>
          </div>

          <div class="popup_card_input w-100 ">
            <label>Description</label>
            <input type="textarea" name="description" placeholder="Type Here...">
          </div>

          <button id="submit-button" class="subBtn" onclick="save()">Add Category</button>
        </div>
      </form>


    </div>

  </div>










  </form>
</div>

<div class="overlay" id="addCategory_Modal1">

  <div class="popup-main-cards">


    <h3>Add Sub Category</h3>




    <div class="popup_card">


      <div class="close-icon"> <a href="<?php echo BASEURL ?>/warehouse/category">X</a></div>
      <h3>Add Sub Category</h3>


      <form id="form1" action="<?php echo BASEURL ?>/warehouse/createSubCategory" method="POST">
        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID </label>
            <input type="text" id="code1" name="category" placeholder="Type Here..." >
            <span id="code-error1" class="hide required-color error-message" >Must be 4 numbers</span>
            <span id="code-empty1" class="hide required-color error-message" >Category ID Cannot Be Empty</span>
          </div>

          <div class="popup_card_input">
            <label>Sub Category ID </label>
            <input type="text" id="code2" name="product_sub_category_code" placeholder="Type Here..." >
            <span id="code-error2" class="hide required-color error-message" >Must be 4 numbers</span>
            <span id="code-empty2" class="hide required-color error-message" >Sub Category ID Cannot Be Empty</span>
          </div>

          <div class="popup_card_input w-100">
            <label>Sub Category Name </label>
            <input type="text" id="name1" name="name" class="form-input" placeholder="Type Here..." >
            <span id="name-error1" class="hide required-color error-message" >Invalid Input</span>
            <span id="name-empty1" class="hide required-color error-message" >Name Cannot Be Empty</span>
          </div>

          <div class="popup_card_input w-100 ">
            <label>Description</label>
            <input type="textarea" name="description" placeholder="Type Here...">
          </div>

          <button id="submit-button1" class="subBtn" onclick="save()">Add Sub Category</button>
        </div>
      </form>


    </div>

  </div>
</div>



<div class="overlay" id="view">

  <div class="popup-main-cards">


    <div class="popup_card">
      <h3>Category Details <a href="<?php echo BASEURL ?>/warehouse/category"></a></h3>

      <form action="<?php echo BASEURL ?>/warehouse/createCategory1" method="POST">

        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID</label>
            <input name="product_category_code" value=<?php echo $row["product_category_code"]; ?>>
          </div>

          <div class="popup_card_input">
            <label>Name</label>
            <input name="name" value=<?php echo $row["name"]; ?>>
          </div>

          <div class="popup_card_input w-100">
            <label>Description</label>
            <input name="description" value=<?php echo $row["description"]; ?>>
          </div>


          <button class="deleteBtn" onclick="createCategory1()">
            <span class="btnText">Delete</span>
          </button>
          <button class="subBtn" onclick="createCategory1()">
            <span class="btnText">Update</span>
          </button>


          <a class="closeBtn" href="<?php echo BASEURL ?>/warehouse/category">Close</a>

      </form>

    </div>

  </div>

</div>

<div class="overlay" id="view1">

  <div class="popup-main-cards">


    <div class="popup_card">
      <h3>Category Details <a href="<?php echo BASEURL ?>/warehouse/category"></a></h3>

      <form action="<?php echo BASEURL ?>/warehouse/createSubCategory" method="POST">


        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID</label>
            <input name="category" value=<?php echo $row["category"]; ?>>
          </div>

          <div class="popup_card_input">
            <label>Sub Category ID</label>
            <input name="product_sub_category_code" value=<?php echo $row["product_sub_category_code"]; ?>>
          </div>

          <div class="popup_card_input">
            <label>Name</label>
            <input name="name" value=<?php echo $row["name"]; ?>>
          </div>

          <div class="popup_card_input">
            <label>Description</label>
            <input name="description" value=<?php echo $row["description"]; ?>>
          </div>


          <button class="deleteBtn" onclick="createSubCategory()">
            <span class="btnText">Delete</span>
          </button>
          <button class="subBtn" onclick="createSubCategory()">
            <span class="btnText">Update</span>
          </button>


          <a class="closeBtn" href="<?php echo BASEURL ?>/warehouse/category">Close</a>

      </form>

    </div>

  </div>

</div>

<script>
  function showTime() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";

    if (h == 0) {
      h = 12;
    }

    if (h > 12) {
      h = h - 12;
      session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;

    setTimeout(showTime, 1000);

  }

  showTime();




</script>

<script>
//ID
let codeInput = document.getElementById("code");
let codeError = document.getElementById("code-error");
let emptyCodeError = document.getElementById("code-empty");

//ID-subpop
let codeInput1 = document.getElementById("code1");
let codeError1 = document.getElementById("code-error1");
let emptyCodeError1 = document.getElementById("code-empty1");

//ID-subpop
let codeInput2 = document.getElementById("code2");
let codeError2 = document.getElementById("code-error2");
let emptyCodeError2 = document.getElementById("code-empty2");

//Name
let nameInput = document.getElementById("name");
let nameError = document.getElementById("name-error");
let emptyNameError = document.getElementById("name-empty");

//Name-subpop
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

//ID
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

//ID-subpop
codeInput2.addEventListener("input", () => {
  if (codeVerify(codeInput2.value)) {
    //If verification returns true
    codeError2.classList.add("hide");
    validInput(codeInput2);
  } else {
    //for false
    errorUpdate(codeInput2, codeError2);
    //empty checker
    emptyUpdate(codeInput2, emptyCodeError2, codeError2);
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

//Name-subpop
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
  if (validClasses.length == 3 && invalidClasses.length == 0) {
    alert("Success");
  } else {
    alert("Error");
  }
});

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

function myFunction1() {
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

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
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
		function save(){	 
		  var userPreference;

			if (confirm("Are you sure?") == true) {
				userPreference = "Data saved successfully!";
			} else {
				userPreference = "Save Canceled!";
			}

			document.getElementById("msg").innerHTML = userPreference; 
		}
    </script>