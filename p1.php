<?php
include("./Includes/connect.php");

if(isset($_POST['btn'])){
    
   
        $sql="INSERT INTO `cart`(prod_id,Qty,price,prodname) values(1,1,'$78','Cartoon Astronaut T')";
        $data=mysqli_query($conn,$sql);
    
    if($data){
        echo'<script>alert("Product added to cart!")</script>';

       
    }
    else{
      echo "Failed to insert the data";
    }
}
   
    
    
    
    
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <selection id="header">
        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPXnwCpLOdribI66xEOL65cxsVYiLmrxNIFl2x9Vo9NMkpN2UeiKmKm5Ofi0mIgv1F0tw&usqp=CAU" class="logo" alt="logo"></a>
        <div>
            <ul id="navbar">
             <li><a  href="index.php">Home</a></li>   
             <li><a class="active" href="shop.php">Shop</a></li> 
             <li><a href="shop.html">Blog</a></li> 
             <li><a href="about.html">About</a></li> 
             <li><a href="contact.html">Contact Us</a></li> 
              <li><a href="cart.php">Cart</a></li> 
          
            
              
            
            </ul>
        </div>
    </selection>

 

  <selection id="feature" class="section-p1">
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

  <selection id="product1" class="section-p1">
    
     <div class="pro-container">
     <center>
     <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f1.jpg?raw=true" alt="">
       <center> <div class="des"><form method="post">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
            <p>Introducing our Crocodile Cartoon Astronaut T-shirts, where imagination meets style! Take a whimsical journey through space with our charming crocodile astronaut design, sure to capture hearts and spark conversations. Crafted from premium quality materials, these tees offer both comfort and durability. Whether you're a space enthusiast or simply love unique fashion statements, our Crocodile Cartoon Astronaut T-shirts are the perfect addition to your wardrobe. Elevate your style to intergalactic heights for just $78. Get ready to stand out from the crowd and let your imagination soar!</p>
    

        <h4>$78</h4>

        <button name="btn" style="font-size: 12px;
    font-weight: 600;
    padding: 15px 30px;
    color: #fff;
    background-color: #088178;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.2s;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
">    Add to Cart </button></form>
        </div>
        </center>
</div></div>
   
 </selection>
</center>




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
</body>
</html>
