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
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expenseCat">Supplier</li>
      <li class="sidenav__list-item"><a href="<?php echo BASEURL ?>/commercial/expenseCat">Driver</li>
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










  </form>
</div>