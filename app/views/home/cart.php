<!-- @format -->
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paradise Beverages</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Plus Jakarta Sans" rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />



  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="logo" width="125px"/></a>
          </div>




        <nav>
          <ul id="MenuItems">
          <li><a href="<?php echo BASEURL ?>/home/index">Home</a></li>
              <li><a href="<?php echo BASEURL ?>/home/index">Category</a></li>
              <li><a href="<?php echo BASEURL ?>/home/index">Contact</a></li>
              <li><a href="<?php echo BASEURL ?>/login">Profile</a></li>
              <li><a href="<?php echo BASEURL ?>/signup1">Register</a></li>
            </ul>
        </nav>





        <img src="images/cart.png" width="30px" height="30px" alt="cart" />
        <img
          src="images/menu.png"
          class="menu-icon"
          onclick="menutoggle()"
          width="30px"
          height="30px"
          alt="menu"
        />
      </div>

</div>



  
    <!-- Cart Items Details -->

    <div class="small-container cart-page">
      <table>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>

        
        <?php


$cart = $_SESSION['cart'] ?? array();

// Loop through each product in the cart
foreach ($cart as $product_code => $batches) {
    echo "<h2>$product_code</h2>";
    
    // Loop through each batch of the product
    foreach ($batches as $batch_id => $batch_info) {
        $batch_quantity = $batch_info['quantity'];
        $batch_price = $batch_info['selling_price'];
        $batch_name = $batch_info['name'];
        $sub_total = $batch_info['sub_total'];
        
        echo "<p>Batch ID: $batch_id</p>";
        echo "<p>Batch Quantity: $batch_quantity</p>";
        echo "<p>Batch Price: $batch_price</p>";
        echo "<p>Batch Name: $batch_name</p>";
        echo "<p>sub_total: $sub_total</p>";
    }
}







var_dump($_SESSION['cart']);

if(isset($_SESSION['cart'])) {
  // Loop through the cart items and display them
  foreach($_SESSION['cart'] as $product_code => $product) {
      echo '<tr>
                <td>
                    <div class="cart-info">
                        <p>'.$product['name'].'</p>
                        <div>
                            <p>'.$product_code.'</p>
                            <small>Price: £'.$product['price'].'</small>
                            <br />
                            <input class="btn-danger" type="button" value="Remove"> 
                        </div>
                    </div>
                </td>
                <td><input type="number" min="1" max="10" value='.$product['quantity'].' /></td>
                <td>£'.$product['price'].'</td>
            </tr>';
  }
} else {
  // Display a message if the cart is empty
  echo 'Your cart is empty.';
}

?>

   
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>£647.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>£35.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>£682.00</td>
          </tr>
        </table>
        
      </div>
      <button>Checkout</button>
    </div>

    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download our App for Android and iOS devices</p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="play store logo" />
              <img src="images/app-store.png" alt="app store logo" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo-pandoratrans.png" alt="black pandora logo" />
            <p>
              Our core purpose is to epitomise creativity, elegance, luxury,
              excellence, and craftsmanship in all of our products.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Need Help?</li>
              <li>Return Policy</li>
              <li>Our Brand Story</li>
              <li>Become an Affiliate</li>
              <li>Terms & Conditions</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>TikTok</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright"> © 2022 Pandora Piere London Ltd. All Rights Reserved. <br> *This website was built by Lindelani Moyo.* </p>
      </div>
    </div>

    <!-- JavaScript for Toggle Menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
