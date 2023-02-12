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
  <a class="link" class="active" href="<?php echo BASEURL ?>/welcome/warehouse"><i class='bx bxs-dashboard'></i>&nbsp Dashboard</a>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Product
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container">
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/Product">Add Product</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/category">Category</a>
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/brand">Brand</a>
  </div>

  <button class="dropdown-btn"><i class='bx bxs-store-alt'></i>&nbsp Purchase Requsition
    <i class="fa fa-caret-down"></i>
  </button>

  <div  class="dropdown-container-on">
    <a class="link-drop" href="<?php echo BASEURL ?>/warehouse/createPr">Create PR</a>
    <a class="link-drop-on" href="<?php echo BASEURL ?>/warehouse/prList">View PR</a>
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

            <main class="main">
                <div class="main-cards">
                    <div class="card">Purchase Requsition List
                        <a href="#"> <button class="blue-add-btn-right"> Add +</button></a>
                       
                        <div class="container">
                            <table id="myTable">
                                <tr>
                                    <th>PRCode</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>

                                <tr>
                                    <td>ITM0045</td>
                                    <td>21 Aug 2022</td>
                                    <td>3.00 pm</td>
                                    <td><button class="status"> Approved</button></td>
                                    <td><button class="viewBtn"> View</button></td>
                                </tr>

                                <tr>
                                    <td>ITM0045</td>
                                    <td>21 Aug 2022</td>
                                    <td>3.00 pm</td>
                                    <td><button class="status"> Approved</button></td>
                                    <td><button class="viewBtn"> View</button></td>
                                </tr>

                                <tr>
                                    <td>ITM0045</td>
                                    <td>21 Aug 2022</td>
                                    <td>3.00 pm</td>
                                    <td><button class="status1"> Partially Approved</button></td>
                                    <td><button class="viewBtn"> View</button></td>
                                </tr>

                                <tr>
                                    <td>ITM0045</td>
                                    <td>21 Aug 2022</td>
                                    <td>3.00 pm</td>
                                    <td><button class="status1"> Partially Approved</button></td>
                                    <td><button class="viewBtn"> View</button></td>
                                </tr>

                                <tr>
                                    <td>ITM0045</td>
                                    <td>21 Aug 2022</td>
                                    <td>3.00 pm</td>
                                    <td><button class="reqbtn"> Requested</button></td>
                                    <td><button class="viewBtn"> View</button></td>
                                </tr>
                                
                            </table>


                        </div>
                    </div>
                </div>
            </main>
    </body>


</html>