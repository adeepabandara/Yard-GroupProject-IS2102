<!DOCTYPE html>
    <head>
    
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <div class="grid-container">
            <header class="header"> Warehouse&nbsp&nbsp>&nbsp&nbspPurchase Requsition List</header>
          
            

            <div class="sidenav">
    <div class="logo"><center><img src="<?php echo BASEURL ?>/images/b&wlogo.png" alt="logo" width="40%"></center></div>
  <a class="link-on" class="active" href="<?php echo BASEURL ?>/welcome/commercial"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Expenses
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expense_record">Record Expense</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/expenseCat">Expense Category</a>
  </div>


  <a class="link" href="<?php echo BASEURL ?>/commercial/customer"><i class='bx bxs-truck'></i>&nbsp Customer</a>
  <a class="link" href="#contact"><i class='bx bxs-coin'></i>&nbsp Requistions</a>
  <button class="dropdown-btn"><i class='bx bxs-file' ></i>&nbsp Purchase
    <i class="fa fa-caret-down"></i>
  </button>
  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/commercial/pr">View Requisition</a>
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
                <div class="main-cards">
                    <div class="card">Purchase Requsition List
                    
                       
                        <div class="container">

                        <?php

                        $path = BASEURL;

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Warehouse</th>";
                        echo "<th>PR Code</th>";
                        echo "<th>Created_date</th>";
                        echo "<th>Requested_date</th>";
                        echo "<th>Pr_status</th>";
                        echo "<th></th>";
                        while ($row = $data['requisitionList']->fetch_assoc()) {

                          $wc = $row['pr_code'];

                          echo "<tr>";
                          echo "<td>" . $row["warehouse_code"] . "</td>";
                          echo "<td>" . $row["pr_code"] . "</td>";
                          echo "<td>" . $row["created_date"] . "</td>";
                          echo "<td>" . $row["requested_date"] . "</td>";
                          echo "<td>" . $row["pr_status"] . "</td>";

                          echo "<td><a class='viewBtn' href=" . BASEURL . "/commercial/viewPr/" . $row["pr_code"] . "> View</a></td>";
                     
                          echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                          

                        </div>
                    </div>
                </div>
            </main>
    </body>


</html>