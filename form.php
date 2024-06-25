<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
   
</head>
<body>
<selection id="header">
        
       
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPXnwCpLOdribI66xEOL65cxsVYiLmrxNIFl2x9Vo9NMkpN2UeiKmKm5Ofi0mIgv1F0tw&usqp=CAU" class="logo" alt="logo"></a>
        <section id="newsletter1">
 
        <div class="form">
            <ul id="navbar">
            <li><a  href="index.php">Home</a></li>   
             <li><a class="active" href="shop.php">Shop</a></li> 
             <li><a href="blog.php">Blog</a></li> 
                <li><a href="contact.php">Feedback</a></li> 
               <li><a href="cart.php"> Cart</a></li> 
               <li><a href="profile.php"> View Profile</a></li> 
               <li><a href="chat.php"> ChatBot</a></li> 
             
               <li><a href="logout.php"> Logout</a></li> 
             
             
            </ul>
        </div></section>
    </selection><selection id="feature" class="section-p1">
      <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f1.png?raw=true" alt="feat">
     <h6>Free Shipping</h6> 
    </div>
    <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f2.png?raw=true"><h6>Online Order</h6> 
    </div>
    <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f3.png?raw=true"> <h6>Save Money</h6> 
    </div>
    <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f4.png?raw=true"> <h6>Promotions</h6> 
    </div>
    <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f5.png?raw=true"><h6>Happy Sell</h6> 
    </div>
    <div class="fe-box">
      
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/features/f6.png?raw=true">  <h6>Support</h6> 
    </div>
  </selection>
     <br><center>
  <!-- <section id="newsletter" class="section-p1 section-m1"> -->
  <div class="form-container">
  <h2 class="form-title">Enter Details</h2>

    <form method="post" >
    
        <input type="text" name="uname" id="" class="form-input"placeholder="Enter Your Name"><br><br>
        <input type="text"  name="pname" id=""class="form-input" placeholder="Enter Product Name"><br><br>
        <input type="text" name="add" id="" class="form-input"placeholder="Enter Your Address"><br><br>
        <button type="submit" class="form-submit" name="submit">Submit</button>
 
</div>

    </form></div> </center>
    <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>Get email updates for our latest shop and <span>Special Offers</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Enter your email address">
        <button class="normal1"> Sign Up</button>
        
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="" alt="">
        <h4>Contact</h4>
        <p><b>Address:</b>562 Wellington Road, Street 32, San Fransisco</p>
        <p><b>Phone:</b>+01 2222 365/ (+91) 01 2345 6789</p>
       <div class="follow">
        <h4>follow Us</h4>
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-facebook-f"></i>
            
        
        </div>
       </div>
    
    </div>
<div class="col">
    <h4>About</h4>
    <a href="#">About Us</a>
    <a href="#">Delivery Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms and Conditions</a>
    <a href="#">Contact Us</a>
    
</div>
<div class="col">
    <h4>Account</h4>
    <a href="#">Sign In </a>
    <a href="#">View Cart</a>
    <a href="#">My wishlist</a>
    <a href="#">Track My Order</a>
    <a href="#">Help</a>
    
</div>

  <div class="col install">
    <h4>Install App</h4>
    <p>From app store or Google play store</p>
    <div class="row">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/pay/app.jpg?raw=true" alt="">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/pay/play.jpg?raw=true" alt="">
    </div>
    <p>Secured Payment Gateways</p>
    <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/pay/pay.png?raw=true" alt="">
</div>
<div class="copy">
    <p>C 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
</div>
</footer>

<?php
include("orders.php");
include("Includes/connect.php");
include("search.php")
?>
</body>
</html>