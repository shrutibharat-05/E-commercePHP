
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
             <li><a href="blog.php">Blog</a></li> 
                <li><a href="contact.php">Feedback</a></li> 
              <li><a href="chat.php"> ChatBot</a></li> 
             
               <li><a href="login.php"> Login</a></li> 
             
            </ul>
        </div>
    </selection>

  <center>
  <?php


include("./Includes/connect.php");
include("funct1.php");
?></center><section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupans & up to 70% off!</p>
    <a href="shop.php"><button>Shop Now</button></a>
  </section>  

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
   <center> <h2>Featured products</h2>
     <p>Summer Collection New Modern Design</p></center> 
     <div class="pro-container">
      
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f1.jpg?raw=true" alt=""></a>
        <div class="des">
            <span>Crocodile</span>
            <h5>Cartoon Astronaut T-shirts</h5>
    
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f2.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f3.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        <!-- <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
     
        </div> -->
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f4.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
       
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f5.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f6.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f7.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f8.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
</div>

     
  </selection>

  <selection id="banner" class="sectio-m1" >
    
        <h4>Repair Services</h4>
        <h2>Upto <span>70% off </span>on all the t-shirts and accesories</h2>
        <button class="normal">Explore more</button>
    
  </selection>

  <selection id="product1" class="section-p1">
   <center> <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p></center>
    <div class="pro-container">
     
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n1.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n2.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n3.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n4.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
      
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n5.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n6.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
      
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n7.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n8.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       
     
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
</div>

    
 </selection>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy Deals</h4>
        <h2>Buy 1 Get 1 Free</h2>
        <span>The best classic dress is on sale at cara</span>
        <button>Leran More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Spring/Summer </h4>
        <h2>Upcomig Season</h2>
        <span>The best classic dress is on sale at cara</span>
        <button>Collection</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>Seasonal Sale</h2>
        <h3>Winter Collection -50% off</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>New Footwear Collection</h2>
        <h3>Spring/Summer 2024</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-shirts</h2>
        <h3>New Trendy Prints</h3>
    </div>
</section>
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up for Newsletters</h4>
        <p>Get email updates for our latest shop and <span>Special Offers</span></p>
    </div>
    <div class="form1" id="new">
        <input type="text" placeholder="Enter your email address">
        <button class="normal1" > Sign Up</button>
        
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
</body>
</html>