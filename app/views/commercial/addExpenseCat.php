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
    <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"> </center>
    <ul class="sidenav__list">
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/commercial">Dashboard</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expense_record">Expense Record</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/customer">Customer</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/welcome/signout">Sign Out</a></li>
    </ul>
  </aside>

  <main class="main">
    <div class="main-header">
      <h2>Expense Category</h2>
    </div>


    <div class="main-cards">
      <div class="card">Category
        <a href="#addCategory_Modal"> <button class="blue-add-btn-right"> Add +</button></a>


        <div class="container">
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
      </div>

      <div class="card"> Sub Category

        <div>
          <button class="blue-add-btn-right" id="openCategoryBtn"> Add +</button>
        </div>

        <div class="container">


          <table>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Description</th>
              <th></th>
              <th></th>
              <!--
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
      </div>


    </div>



</div>
</main>
</div>
</body>

</html>

            -->

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
                          <!-- <span id="description-error" class="hide required-color error-message"> Must be 4 Digits</span>
                          <span id="description-empty" class="hide required-color error-message">Description cannot be empty</span> -->
                        </div>

                        <button id="submit-button" class="subBtn">Add Category</button>
                      </div>
                    </form>


                  </div>

                </div>







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