<!-- @format -->
<?php

?>
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
          <div class="logo">
          <img src="<?php echo BASEURL ?>/images/logo.png" alt="yard logo" class="center" width="125px">
          </div>


          <nav>
            <ul id="MenuItems">
            <li><a href="<?php echo BASEURL ?>/home/signout">Signout</a></li>
              <li><a href="<?php echo BASEURL ?>/home/index">Home</a></li>
              <li><a href="<?php echo BASEURL ?>/home/index">Category</a></li>
              <li><a href="<?php echo BASEURL ?>/cart">Cart</a></li>
              <li><a href="<?php echo BASEURL ?>/login">Profile</a></li>
              <li><a href="<?php echo BASEURL ?>/signup1">Register</a></li>
            </ul>
          </nav>



          <a href="cart.html"><img src="images/cart.png" width="30px" height="30px" alt="cart"/></a>
          <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px" alt="menu"/>
        </div>

<!--
        <div class="category-list">
          <div class="category-button">Soft Drinks</div>
          <div class="category-button">Water</div>
          <div class="category-button">Dairy Products</div>
          <div class="category-button">Fruit Drinks</div>
          <div class="category-button">Energy Drinks</div>
          <div class="category-button">Beer</div>
-->


<div id="slidy-container">
  <figure id="slidy">
    <img src="pplcart/images/banner1.png" alt="eyes" >
    <img src="pplcart/images/banner2.png" alt="lou" >
  
  </figure>
</div>



<div class="product-container">



<?php

while ($row = $data['result']->fetch_assoc()) {

$path = BASEURL;

$pid = $row['product_code'];

echo "<div class='product-card'>";
echo "<p class='product-name'>". $row["name"] ."</p>";
echo "<p class='product-description'>". $row["product_code"] ."</p>";

echo "<img src='pplcart/images/P1.png' alt='Product Name' class='product-image'>";
echo "<div class='product-price'>LKR 100.00</div>";
echo "<a class='add-to-cart-button' onclick='qty(\"$pid\")' href='#add'>Add to Cart</a>";

echo '</div>';
}
?>



  </div>



  <div class="overlay" id="add">
  
    <div class="popup_card">
            
    <!--<h3>Add The Quantity <a href="index.html">X</a></h3>-->

    <div class="product-card-popup">

    <h2 id="name" type="text"></h2>
      <p class="product-description" id="category" >Soft Drinks</p>
    
      <div class="product-price">
        <span class="original-price">LKR 100.00</span>
        <span class="discount-price">LKR 80.00</span>
      </div>
      

      <div class="popup_card_input">
      <form action="<?php echo BASEURL ?>/home/addToCart" method="POST" id="form">
        <label>Add Quantity</label>
        <input name="quantity"></input>
        <input id="product_code" name="product_code" type="text" hidden></input>
        <input id="product_name" name="name" type="text" hidden></input>
      <button class="add-to-cart-button" value="submit">Add to Cart</button>
  
        


<script>
function qty(product_code) {
  var url = '<?php echo "$path/home/getProduct/" ?>' + product_code;
  fetch(url)
    .then(response => response.json())
    .then(data => {
      console.log(data);
      console.log(data[0].product_code);
      document.getElementById("name").innerHTML = data[0].name;
      document.getElementById("product_code").value = data[0].product_code;
      document.getElementById("product_name").value = data[0].name;
    })
  
}

</script>





















































<script>
  var MenuItems = document.getElementById("MenuItems");

  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
    if(MenuItems.style.maxHeight == "0px")
    {
      MenuItems.style.maxHeight = "200px"
    }
    else {
      MenuItems.style.maxHeight = "0px"
    }
  }
</script>

<script>

/* user defined variables */
var timeOnSlide = 3, 		
    // the time each image will remain static on the screen, measured in seconds
timeBetweenSlides = 1, 	
    // the time taken to transition between images, measured in seconds

// test if the browser supports animation, and if it needs a vendor prefix to do so
    animationstring = 'animation',
    animation = false,
    keyframeprefix = '',
    domPrefixes = 'Webkit Moz O Khtml'.split(' '), 
    // array of possible vendor prefixes
    pfx  = '',
    slidy = document.getElementById("slidy"); 
if (slidy.style.animationName !== undefined) { animation = true; } 
// browser supports keyframe animation w/o prefixes

if( animation === false ) {
  for( var i = 0; i < domPrefixes.length; i++ ) {
    if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
      pfx = domPrefixes[ i ];
      animationstring = pfx + 'Animation';
      keyframeprefix = '-' + pfx.toLowerCase() + '-';
      animation = true;
      break;
    }
  }
}

if( animation === false ) {
  // animate in JavaScript fallback
} else {
  var images = slidy.getElementsByTagName("img"),
      firstImg = images[0], 
      // get the first image inside the "slidy" element.
      imgWrap = firstImg.cloneNode(false);  // copy it.
  slidy.appendChild(imgWrap); // add the clone to the end of the images
  var imgCount = images.length, // count the number of images in the slide, including the new cloned element
      totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
      slideRatio = (timeOnSlide / totalTime)*100, // determine the percentage of time an induvidual image is held static during the animation
      moveRatio = (timeBetweenSlides / totalTime)*100, // determine the percentage of time for an individual movement
      basePercentage = 100/imgCount, // work out how wide each image should be in the slidy, as a percentage.
      position = 0, // set the initial position of the slidy element
      css = document.createElement("style"); // start marking a new style sheet
  css.type = "text/css";
  css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
  css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
  css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n"; 
  for (i=0;i<(imgCount-1); i++) { // 
    position+= slideRatio; // make the keyframe the position of the image
    css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
    position += moveRatio; // make the postion for the _next_ slide
    css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
}
  css.innerHTML += "}\n";
  css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; // call on the completed keyframe animation sequence
document.body.appendChild(css); // add the new stylesheet to the end of the document
}
</script>
  </body>
</html>