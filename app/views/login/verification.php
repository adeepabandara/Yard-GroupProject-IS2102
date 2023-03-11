

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  </head>





  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">

  
  
  
        <nav>
          <ul id="MenuItems">
              <li><a href="index.html">Home</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="signin.html">Account</a></li>
              <li><a href="registration.html">Register</a></li>
            </ul>
        </nav>
  
          <a href="cart.html"><img src="images/cart.png" width="30px" height="30px" alt="cart"/></a>
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




    <!-- Registration -->
    <div class="registration-page">
      <div class="button-container">

  
        <div class="logo">
          <img src="<?php echo BASEURL ?>/images/logo.png" alt="yard logo" class="center"><br>
          <a href="<?php echo BASEURL ?>/login/signup" >One Time Password has Sent</a>
          
          </div>
          
        <button class="delivery-select-button" onclick="delivery()">Individual</button>
        <button class="delivery-button" onclick="storepickup()">Company</button>
        
    
      </div>


      <div class="main-cards">

        <div class="reg-card">
            

  
              <div class="heading"><h2>Please Verify Your Account</h2></div>

              <form action="<?php echo BASEURL ?>/signup1/processVerifyOTP" method="POST" id="form">
              
          
                <div>
                  <div class="input-container">

                  <div class="input-field">
                      <label for="field1">OTP*</label>
                      <input type="text" id="field1" name="otp">
                    </div>
                    
                    


                    

                   
                    


                    <button class="signin-button" type="submit">Verify</button>
                  </div>
               

                  

                  
  
                    </div>
            
                </div>


      
</div>
    <!-- Footer -->
    <div class="footer">
        <div class="row">
          <div class="footer-col-1">
            <div class="logo">
              <a href="index.html"><img src="images/logo.png" alt="logo" width="200px"/></a><br>
              18/18A, Udumulla Road Battaramulla<br>
              +9476 626 6925 <br>
              adeepabandara@gmail.com<br>
            </div>
          </div>
          <div class="footer-col-2">
        
          </div>
          
        </div>
        <hr />
        <p class="copyright"> © 2023 YARD Solution Ltd. All Rights Reserved. </p>

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