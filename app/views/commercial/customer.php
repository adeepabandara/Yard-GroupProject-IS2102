<?php

session_start();

if (isset($_SESSION['username'])) {
  // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/validate.css">
<div class="grid-container">
  <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspCustomer </header>


  <div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link"  href="<?php echo BASEURL ?>/welcome/commercial"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
  </div>


  <a class="link-on" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customers</a>
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

  <main class="main">
    <div class="main-header">
      <h2>Customers</h2>
    </div>


    <div class="main-cards">


      <div class="card">Add Customers
        <div class="container">
          <form action="<?php echo BASEURL ?>/commercial/createCustomer" method="POST">
            <div>
              <div>


                <div class="fields">
                  <div class="input-field">
                    <label>Customer ID*</label>
                    <input type="text" id="code" name="id" placeholder="Type Here..." required>
                    <span id="code-error" class="hide required-color error-message"> Must be 4 numbers</span>
                    <span id="code-empty" class="hide required-color error-message"> Category ID cannot be empty</span>
                  </div>

                  <div class="input-field">
                    <label>Contact No*</label>
                    <input type="text" id="phone" name="contact_no" placeholder="Type Here..." required="required">
                    <span id="phone-error" class="hide required-color error-message"> Contact Number Should Have 10 Digits</span>
                    <span id="empty-phone" class="hide required-color error-message"> Contact cannot be empty</span>

                  </div>


                  <div class="input-field">
                    <label>Name*</label>
                    <input type="text" id="name" name="name" placeholder="Type Here..." required>
                    <span id="name-error" class="hide required-color error-message"> Cannot be numbers</span>
                    <span id="name-empty" class="hide required-color error-message"> Category Name cannot be empty</span>
                  </div>

                  <div class="input-field">
                    <label>NIC*</label>
                    <input type="text" name="identity_no" placeholder="Type Here..." required="required">
                  </div>

                  <div class="input-field">
                    <label>Email*</label>
                    <input type="text" id="email" name="email" placeholder="Type Here...">
                    <span id="email-error" class="hide required-color error-message"> Invalid Email</span>
                    <span id="empty-email" class="hide required-color error-message"> Email cannot be empty</span>
                  </div>

                  <div class="input-field">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Type Here...">
                  </div>


                  <div class="input-field w-100">
                    <label>GPS Location</label>
                    <input type="text" name="gps_location" placeholder="Type Here...">

                  </div>



                </div>
              </div>
              <center>
                <button id="submit-button" class="subBtn">Add Customer</button>
                </button>
              </center>
            </div>
          </form>



        </div>

      </div>

      <div class="card">Customer List
        <div class="container">

          <table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th></th>
              <th></th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($rows as $row) :
            ?>
              <tr>
                <td>
                  <?php echo $row["id"]; ?>
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




    </form>

    <div class="overlay" id="view">

      <div class="popup-main-cards">


        <div class="popup_card">
          <h3>Customer Details <a href="<?php echo BASEURL ?>/commercial/customer">X</a></h3>

          <form action="<?php echo BASEURL ?>/commercial/createCustomer" method="POST">

            <div class="popup_card_fields">

              <div class="popup_card_input">
                <label>Customer ID</label>
                <input name="id" value=<?php echo $row["id"]; ?>>
              </div>
              <div class="popup_card_input">
                <label>Contact No*</label>
                <input name="contact_no" value=<?php echo $row["contact_no"]; ?>>
              </div>
              <div class="popup_card_input">
                <label>Name</label>
                <input name="name" value=<?php echo $row["name"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>NIC</label>
                <input name="identity_no" value=<?php echo $row["identity_no"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Email</label>
                <input name="email" value=<?php echo $row["email"]; ?>>
              </div>

              <div class="popup_card_input">
                <label>Address</label>
                <input name="address" value=<?php echo $row["address"]; ?>>
              </div>

              <div class="popup_card_input w-100">
                <label>GPS Location</label>
                <input name="gps_location" value=<?php echo $row["gps_location"]; ?>>
              </div>


              <button class="deleteBtn" onclick="createWarehouse()">
                <span class="btnText">Delete</span>
              </button>
              <button class="subBtn" onclick="createWarehouse()">
                <span class="btnText">Update</span>
              </button>


              <a class="closeBtn" href="<?php echo BASEURL ?>/commercial/customer">Close</a>

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

      //Name
      let nameInput = document.getElementById("name");
      let nameError = document.getElementById("name-error");
      let emptyNameError = document.getElementById("name-empty");

      //Email
      let emailInput = document.getElementById("email");
      let emailError = document.getElementById("email-error");
      let emptyEmailError = document.getElementById("empty-email");

      //Phone
      let phoneInput = document.getElementById("phone");
      let phoneError = document.getElementById("phone-error");
      let emptyPhoneError = document.getElementById("empty-phone");

      // //Description
      // let descriptionInput = document.getElementById("description");
      // let descriptionError = document.getElementById("description-error");
      // let emptydescriptionrror = document.getElementById("description-empty");

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

      //Category ID verification
      const codeVerify = (number) => {
        const regex = /^[0-9]{4}$/;
        return regex.test(number);
      };

      //Email verification
      const emailVerify = (input) => {
        const regex = /^[a-z0-9_]+@[a-z]{3,}\.[a-z\.]{3,}$/;
        return regex.test(input);
      };

      //Phone number verification
      const phoneVerify = (number) => {
        const regex = /^[0-9]{10}$/;
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

      //Email
      emailInput.addEventListener("input", () => {
        if (emailVerify(emailInput.value)) {
          emailError.classList.add("hide");
          validInput(emailInput);
        } else {
          errorUpdate(emailInput, emailError);
          emptyUpdate(emailInput, emptyEmailError, emailError);
        }
      });

      //Phone
      phoneInput.addEventListener("input", () => {
        if (phoneVerify(phoneInput.value)) {
          phoneError.classList.add("hide");
          validInput(phoneInput);
        } else {
          errorUpdate(phoneInput, phoneError);
          emptyUpdate(phoneInput, emptyPhoneError, phoneError);
        }
      });

      // //Description
      // descriptionInput.addEventListener("input", () => {
      //   if (textVerify(descriptionInput.value)) {
      //     descriptionError.classList.add("hide");
      //     validInput(descriptionInput);
      //   } else {
      //     errorUpdate(descriptionInput, descriptionError);
      //     emptyUpdate(descriptionInput, emptydescriptionError, descriptionError);
      //   }
      // });

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