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
  <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspExpense Category </header>



  <div class="sidenav">
    <div class="logo">
      <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center>
    </div>
    <a class="link" href="<?php echo BASEURL ?>/welcome/commercial"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

    <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-container-on">
      <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
      <a class="link-drop-on" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
    </div>


    <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customer</a>
    <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Requistions</a>
    <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a class="link-drop" href="#">Daily Sales Report</a>
      <a class="link-drop" href="#">Link 2</a>
      <a class="link-drop" href="#">Link 3</a>
    </div>
    <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a class="link-drop" href="#">Link 1</a>
      <a class="link-drop" href="#">Link 2</a>
      <a class="link-drop" href="#">Link 3</a>
    </div>
    <button class="dropdown-btn"><i class='bx bxs-file'></i>&nbsp Reports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a class="link-drop" href="#">Link 1</a>
      <a class="link-drop" href="#">Link 2</a>
      <a class="link-drop" href="#">Link 3</a>
    </div>
    <a class="link" href="<?php echo BASEURL ?>/home/signout"><i class='bx bxs-left-arrow-square'></i>&nbsp Signout</a>
  </div>

  <main class="main">
    <div class="main-header">
      <h2>Expense Category</h2>
    </div>


    <div class="main-cards">
      <div class="card">Expense Category List

        <div>
          <a class="blue-add-btn-right" id="openCategoryBtn" href='#addCategory_Modal'> Add +</a>
        </div>


        <div class="container">
          <table>


            <?php

          $path = BASEURL;

          echo "<table>";
          echo "<tr>";
          echo "<th>Code </th>";
          echo "<th>Name</th>";
          echo "<th>Description</th>";
          echo "<th></th>";
          echo "<th></th>";
          echo "<th></th>";
          while ($row = $data['result1']->fetch_assoc()) {

            $wc = $row['category_code'];

            echo "<tr>";
            echo "<td>" . $row["category_code"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td><a class='viewBtn' id='myButton' href=" . BASEURL . "/commercial/expenseSubCat/" . $row["category_code"] . " >Select</a></td>";
            echo "<td><a class='viewBtn' onclick='abc(\"$wc\")'  href='#view' >View</a></td>";

            echo "<td><a class='delBtn' href=" . BASEURL . "/commercial/deleteExpCategory/" . $row["category_code"] . "> Delete</a></td>";
            echo "</tr>";
          }
          echo "</table>";
          ?>

        </div>
      </div>
      <script>
document.getElementById("myButton").addEventListener("click", function(){
    fetch("<?php echo BASEURL ?>/commercial/expenseCat")
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        fetch("<?php echo BASEURL ?>/commercial/expenseSubCat")
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            // Handle the response from controller2
        })
    })
})
</script>




      <div class="card"> Sub Category

 
        <div>
          <button class="blue-add-btn-right" id="openCategoryBtn"> Add +</button>
        </div>

        <div class="container">



          <table>


            <?php



$path = BASEURL;

echo "<table>";
echo "<tr>";
echo "<th>Code </th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<th></th>";
echo "<th></th>";
while ($row = $data['result2']->fetch_assoc()) {

$wc = $row['sub_category_code'];

echo "<tr>";
echo "<td>" . $row["sub_category_code"] . "</td>";
echo "<td>" . $row["name"] . "</td>";
echo "<td>" . $row["description"] . "</td>";
echo "<td><a class='viewBtn' onclick='abc(\"$wc\")'  href='#view' >View</a></td>";

echo "<td><a class='delBtn' href=" . BASEURL . "/commercial/deleteExpCategory/" . $row["sub_category_code"] . "> Delete</a></td>";
echo "</tr>";
}
echo "</table>";
?>
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


      <div class="close-icon"> <a href="<?php echo BASEURL ?>/commercial/expenseCat">X</a></div>
      <h3>Add Category</h3>


      <form action="<?php echo BASEURL ?>/commercial/createExpenseCat" method="POST">
        <div class="popup_card_fields">

          <div class="popup_card_input">
            <label>Category ID </label>
            <input type="text" id="code" name="category_code" placeholder="Type Here..." required>
            <span id="code-error" class="hide required-color error-message"> Must be 4 numbers</span>
            <span id="code-empty" class="hide required-color error-message"> Category ID cannot be empty</span>
          </div>

          <div class="popup_card_input">
            <label>Category Name * </label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Type Here..." required>
            <span id="name-error" class="hide required-color error-message"> Cannot be numbers</span>
            <span id="name-empty" class="hide required-color error-message"> Category Name cannot be empty</span>
          </div>

          <div class="popup_card_input w-100 ">
            <label>Description</label>
            <input type="textarea" id="description" name="description" placeholder="Type Here...">

          </div>

          <button id="submit-button" class="subBtn">Add Category</button>
        </div>
      </form>


    </div>

  </div>







  <div class="overlay" id="addCategory_Modal">

    <div class="popup-main-cards">


      <h3>Add Category</h3>


      <div class="popup_card">


        <div class="close-icon"> <a href="<?php echo BASEURL ?>/commercial/expenseCat">X</a></div>
        <h3>Add Category</h3>


        <form action="<?php echo BASEURL ?>/commercial/createExpenseCat" method="POST">
          <div class="popup_card_fields">

            <div class="popup_card_input">
              <label>Category ID </label>
              <input type="text" name="category_code" placeholder="Type Here..." required="required">
            </div>

            <div class="popup_card_input">
              <label>Category Name * </label>
              <input type="text" name="name" class="form-input" placeholder="Type Here..." required="required">
            </div>

            <div class="popup_card_input w-100 ">
              <label>Description</label>
              <input type="textarea" name="description" placeholder="Type Here...">
            </div>

            <button class="subBtn">Add Category</button>
          </div>
        </form>


      </div>

    </div>


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









    </form>

  </div>

  <script>
    //ID
    let codeInput = document.getElementById("code");
    let codeError = document.getElementById("code-error");
    let emptyCodeError = document.getElementById("code-empty");

    //Name
    let nameInput = document.getElementById("name");
    let nameError = document.getElementById("name-error");
    let emptyNameError = document.getElementById("name-empty");

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



  </form>
</div>