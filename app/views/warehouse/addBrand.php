<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM brand");

?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<div class="grid-container">
  <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbspBrand </header>

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
      <h2>Brand</h2>
    </div>

    <div class="main-cards">

      <div class="card">Brand

        <div class="container">
          <form id="form" action="<?php echo BASEURL ?>/warehouse/createBrand" method="POST">
            <div>
              <div>

                <div class="fields">

                  <div class="input-field">
                    <label>Brand ID</label>
                    <input type="text" id="code" name="brand_code" placeholder="Type Here..." required>
                    <span id="code-error" class="hide required-color error-message" >Must be 4 numbers</span>
                    <span id="code-empty" class="hide required-color error-message" >Brand ID Cannot Be Empty</span>
                  </div>


                  <div class="input-field">
                    <label>Name</label>
                    <input type="text" id="name" name="name" placeholder="Type Here..." required>
                    <span id="name-error" class="hide required-color error-message" >Invalid Input</span>
                    <span id="name-empty" class="hide required-color error-message" >Name Cannot Be Empty</span>
                  </div>

                  <div class="input-field w-100">
                    <label>Description </label>
                    <input type="text" id="description" name="description" placeholder="Type Here..." />
                  </div>

                </div>

                <button id="submit-button" class="subBtn" onclick="save()">Add Brand</button>


              </div>
          </form>
        </div>
      </div>
    </div>





    <div class="card">Brand List
      <br><br>
        <input type="text" id="myInput" class="card-searchbar" onkeyup="myFunction()" placeholder="Search for brands.." >
      
      <div class="container">
        

        <table id="myTable">
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
              <?php echo $row["brand_code"]; ?>
            </td>
            <td>
              <?php echo $row["name"]; ?>
            </td>
            <td><a class="viewBtn" href="#view">View</a></td>
            <td><a class="delBtn"> Delete</a></td>

          </tr>
          <?php endforeach; ?>

      </div>
    </div>
</div>
</div>
</div>
</div>

<div class="overlay" id="view">

  <div class="popup-main-cards">


    <div class="popup_card">
      <h3>Brand Details <a href="<?php echo BASEURL ?>/warehouse/brand">X</a></h3>

      <form action="<?php echo BASEURL ?>/warehouse/createBrand" method="POST">

        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Brand ID</label>
            <input name="brand_code" value=<?php echo $row["brand_code"]; ?>>
          </div>

          <div class="popup_card_input">
            <label>Name</label>
            <input name="name" value=<?php echo $row["name"]; ?>>
          </div>

          <div class="popup_card_input w-100">
            <label>Description</label>
            <input name="description" value=<?php echo $row["description"]; ?>>
          </div>


          <button class="deleteBtn" onclick="createBrand()">
            <span class="btnText">Delete</span>
          </button>
          <button class="subBtn" onclick="createBrand()">
            <span class="btnText">Update</span>
          </button>


          <a class="closeBtn" href="<?php echo BASEURL ?>/warehouse/brand">Close</a>

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
//Brand
let codeInput = document.getElementById("code");
let codeError = document.getElementById("code-error");
let emptyCodeError = document.getElementById("code-empty");

//Name
let nameInput = document.getElementById("name");
let nameError = document.getElementById("name-error");
let emptyNameError = document.getElementById("name-empty");

//Submit
let submitButton = document.getElementById("submit-button");

//Valid
let validClasses = document.getElementsByClassName("valid");
let invalidClasses = document.getElementsByClassName("error");

//Text verification (if input contains only text)
const textVerify = (text) => {
  const regex = /^[a-zA-Z]{3,}$/;
  return regex.test(text);
};

//Brand ID verification
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

//Brand ID
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

//Submit button
submitButton.addEventListener("click", () => {
  if (validClasses.length == 2 && invalidClasses.length == 0) {
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

</body>