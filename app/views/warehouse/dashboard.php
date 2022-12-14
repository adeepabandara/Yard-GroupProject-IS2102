<?php

session_start();

if (isset($_SESSION['username'])) {
 // echo $_SESSION['username'];

} else {
  echo '<br>You are not logged in';
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/warehouse.css">


<div class="flex-container">
        <div class="drawer"></div>
        <div class="details-column">
            <div class="menu">
                <div class="menuline">
                    <img src="icons/hamburger.png" width="20px" height="20px">
                    <p class="warehouse">Warehouse</p> &nbsp
					<img src="icons/vector.png" width="20px" height="20px">
                    <p class="add-product-menu">Add Products</p>
                </div>
				<img src="icons/vector1.png" width="20px" height="20px" style="align-self: center; padding-right:20px">
            </div>
            <div class="product-details-background">
                <h1 class="add-product-title">Add Product</h1>
                <div class="row">
                    <div class="product-details-container">
                        <p class="product-details-sub-title">Product details</p>
                        <!-- form body -->
                        <div class="form-body">

                            <div class="horizontal-group">
                                <div class="form-group left">
                                    <label for="id" class="label-title">Product Code</label>
                                    <input type="text" id="firstname" class="form-input" placeholder="PC0001"
                                        required="required" />
                                </div>
                                <div class="form-group right">
                                    <label for="number" class="label-title">Bar Code</label>
                                    <input type="text" id="lastname" class="form-input" placeholder="Type Here..." />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="label-title">Product Name*</label>
                                <input type="text" id="name" class="form-input" placeholder="Type Here..."
                                    required="required">
                            </div>

                           
                                <div class="form-group">
                                    <label for="chassisNo" class="label-title">Add Category *</label>
									<div class="row">
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here..."
                                        required="required">
										<button id="add_category_button" class="button_plus" >+</button>
                                        <div id="add_category" class="modal">

                                            <!-- Add product category content pop up modal -->
                                            <div class="modal-content">
                                              <span class="close">&times;</span>
                                              <h1 class="add-category-title">Add Category</h1>
                                              <div class="horizontal-group">
                                                <div class="form-group left">
                                                    <label for="chassisNo" class="label-title">Category ID</label>
                                                    <input type="text" id="chassisNo" class="form-input" placeholder="VCID009">
                                                </div>
                
                                                <div class="form-group right">
                                                    <label for="chassisNo" class="label-title">Category Name * </label>
                                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                                </div>
                
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="label-title">Description</label>
                                                <input type="text" id="name" class="form-input" placeholder="Type Here..."
                                                    required="required">
                                            </div>
                                            <div style="text-align: center;"><button class="button_normal">Add Category</button></div>
                                            </div>
                                          
                                          </div>
										  </div>
                            </div>

                                <div class="form-group">
                                    <label for="chassisNo" class="label-title">Add Sub Category *</label>
									<div class="row">
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here..."
                                        required="required">
										<button id="add_category_button2" class="button_plus" >+</button>
                                        <div id="add_category2" class="modal1">

                                            <!-- Add product category content pop up modal -->
                                            <div class="modal1-content">
                                              <span class="close2">&times;</span>
                                              <h1 class="add-category-title">Add Sub Category</h1>
                                              <div class="horizontal-group">
                                                <div class="form-group left">
                                                    <label for="chassisNo" class="label-title">Sub Category ID</label>
                                                    <input type="text" id="chassisNo" class="form-input" placeholder="VCID009">
                                                </div>
                
                                                <div class="form-group right">
                                                    <label for="chassisNo" class="label-title">Sub Category Name * </label>
                                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                                </div>
                
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="label-title">Description</label>
                                                <input type="text" id="name" class="form-input" placeholder="Type Here..."
                                                    required="required">
                                            </div>
                                            <div style="text-align: center;"><button class="button_normal">Add Sub Category</button></div>
                                            </div>
                                          
                                          </div>
										  </div>
                                </div>
                           

                            <div class="horizontal-group">
                                <div class="form-group left">
                                    <label for="chassisNo" class="label-title">Opening Stock </label>
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                </div>

                                <div class="form-group right">
                                    <label for="chassisNo" class="label-title">Re Order Level </label>
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                </div>

                            </div>

                            <div class="horizontal-group">
                                <div class="form-group left">
                                    <label for="chassisNo" class="label-title">Purchase Price </label>
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                </div>

                                <div class="form-group right">
                                    <label for="chassisNo" class="label-title">Selling Price </label>
                                    <input type="text" id="chassisNo" class="form-input" placeholder="Type Here...">
                                </div>

                            </div>


                            <div class="form-group">
                                <label for="name" class="label-title">Upload Documents *</label>
                                <div class="drag-area">
                                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>

                                    <input type="file" id="myfile">
                                </div>
                            </div>

                        </div>
                        <div style="text-align: center;"><button class="button_normal">Add Product</button></div>

                    </div>
					
					
					
                     <div class="product-details-container">
                        <div style="height:100%; width:100%; margin-bottom: 10px;">
                            <p class="product-details-sub-title">Product List</p>


                            <form class="nosubmit">
                                <input class="nosubmit" type="search" placeholder="Search Here">
                            </form>

                            <!-- product table -->
                            <table class="list_table">
                                <tr style="background-color: #0295A9;border-color: #0295A9;">
                                    <th style="color: white;">Code</th>
                                    <th style="color: white;">Name</th>
                                    <th style="color: white;">Category</th>
                                    <th style="color: white;"></th>
                                </tr>
                                <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
                                    <td>

                                        <button class="button_blue">view</button>


                                        <button class="button_red">Delete</button>

                        
                        </td>
                        </tr>
                        <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
                            <td>

                                <button class="button_blue">view</button>


                                <button class="button_red">Delete</button>

                    
                    </td>
                    </tr>
                    <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
                        <td>

                            <button class="button_blue">view</button>


                            <button class="button_red">Delete</button>
               
                </td>
                </tr>
                <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
                    <td>

                        <button class="button_blue">view</button>


                        <button class="button_red">Delete</button>          
            </td>
            </tr>
            <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
                <td>

                    <button class="button_blue">view</button>


                    <button class="button_red">Delete</button>

        </div>
        </td>
        </tr>
        <tr>
                                    <td>ED003</td>
                                    <td>Coca Cola Pet</td>
                                    <td>Soft Drinks</td>
            <td>

                <button class="button_blue">view</button>


                <button class="button_red">Delete</button>  
            </td>
            </tr>
        </table>
        <div style="text-align: center;">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
			<a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
          </div>
          </div>
    </div>
    </div>
	
	
    </div>
    </div>
    </div>
    </div>

</body>

</html>
