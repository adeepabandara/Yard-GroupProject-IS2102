<?php

$conn = mysqli_connect("localhost", "root", "", "yard");
$rows = mysqli_query($conn, "SELECT * FROM expense_record");

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
    <header class="header"> Commercial&Finance&nbsp&nbsp>&nbsp&nbspExpense Record </header>



    <!--Sidebar-->
    <div class="sidenav">
        <div class="logo">
            <center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center>
        </div>
        <a class="link" href="<?php echo BASEURL ?>/welcome/commercial"><i class='bx bxs-dashboard'></i>&nbsp
            Dashboard</a>

        <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
            <i class="fa fa-caret-down"></i>
        </button>

        <div class="dropdown-container-on">
            <a class="link-drop-on" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
            <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
        </div>


        <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customers</a>
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
        <a class="link" href="<?php echo BASEURL ?>/home/signout"><i class='bx bxs-left-arrow-square'></i>&nbsp
            Signout</a>
    </div>

    <main class="main">
        <div class="main-header">
            <h2>Expense Category</h2>
        </div>

        <div class="main-cards">

            <div class="card">Record Expense
                <div class="container">
                    <form action="<?php echo BASEURL ?>/commercial/createExpenseRecord" method="POST">
                        <div>
                            <div>


                                <div class="fields">
                                    <div class="input-field">
                                        <label>Entry Number</label>
                                        <input type="text" name="eexpense_entry_no" class="field-1">
                                    </div>

                                    <div class="input-field">
                                        <label>Manufactured Year </label>
                                        <input type="date" name="date" class="field-1">
                                    </div>


                                    <div class="input-field">
                                        <label>Expense Name</label>
                                        <input type="text" name="name">
                                    </div>

                                    <div class="input-field">
                                        <label>Amount</label>
                                        <input type="text" name="amount">
                                    </div>

                                    <div class="input-field">
                                        <label>Description</label>
                                        <input type="text" name="description">
                                    </div>

                                    <div class="input-field">
                                        <label>Add Category</label>
                                        <div class="input-row">
                                            <input type="text" name="add_category" placeholder="Type Here...">
                                            <a type="button" class="add-button" href="#addCategory_Modal">+</a>

                                        </div>
                                    </div>

                                    <div class="input-field">
                                        <label>Add Sub Category</label>
                                        <div class="input-row">
                                            <input type="text" name="add_subcategory" placeholder="Type Here...">
                                            <a type="button" class="add-button" href="#addCategory_Modal">+</a>

                                        </div>
                                    </div>

                                    <div class="popup_card_input">
                                        <label>Upload Documents *</label>

                                        <div class="drag-area">
                                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                            <input type="file" id="myfile">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <center>
                            <button class="subBtn">Add Record</button>
                            </button>
                        </center>
                </div>
                </form>



            </div>



            <div class="card">Customer List
                <div class="container">

                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($rows as $row) :
                    ?>
                        <tr>
                            <td>
                                <?php echo $row["date"]; ?>
                            </td>
                            <td>
                                <?php echo $row["name"]; ?>
                            </td>
                            <td>
                                <?php echo $row["add_category"]; ?>
                            </td>
                            <td>
                                <?php echo $row["amount"]; ?>
                            </td>
                            <td><a class="viewBtn" href="#view"> Edit</a></td>
                            <td><a class="delBtn"> Delete</a></td>

                        </tr>
                        <?php endforeach; ?>

                </div>

            </div>

        </div>





</div>

</div>

<div class="overlay" id="addCategory_Modal">

    <div class="popup-main-cards">


        <div class="popup_card">


            <div class="close-icon"> <a href="<?php echo BASEURL ?>/commercial/recordexpense">X</a></div>
            <h3>Add Category</h3>



            <form action="<?php echo BASEURL ?>/commercial/recordexpense" method="POST">

                <div class="popup_card_fields">

                    <div class="popup_card_input">
                        <label>Category ID </label>
                        <input type="text" name="product_category_code" placeholder="Type Here..." required="required">
                    </div>

                    <div class="popup_card_input">
                        <label>Category Name * </label>
                        <input type="text" name="name" class="form-input" placeholder="Type Here..."
                            required="required">
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



</div>
</form>

</div>