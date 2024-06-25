

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
        <section id="newsletter1">
 
        <div class="form">
            <ul id="navbar">
             <li><a  href="index1.php">Home</a></li>   
             <li><a class="active" href="shop.php">Shop</a></li> 
             <li><a href="blog.php">Blog</a></li> 
                <li><a href="contact.php">Feedback</a></li> 
               <li><a href="cart.php"> Cart</a></li> 
               <li><a href="profile.php"> View Profile</a></li> 
               <li><a href="chat.php"> ChatBot</a></li> 
             
               <li><a href="logout.php"> Logout</a></li> 
             
             
            </ul>
        </div></section>
    </selection>
    

    <center>
     <?php


include("Includes/connect.php");
include("funct.php");  
//include("search.php");


?>


 





    </center>

    
    
    
    <center>
<section id="newsletter" class="section-p1 section-m1">
    <div class="form" >
        <form method="GET" action="main.php">
       <input type="text" placeholder="Enter your choice" name="search_text">
        <button class="normal1" type="submit" name="search_btn"> Search</button>
        <form>
    </div>
</section></center>









  <section id="page-header">
  <h2>#StayHome</h2>

    <p>Save more with coupans & up to 70% off!</p>
    
  </section>  

  

  <selection id="product1" class="section-p1">
    
     <div class="pro-container">
      
     <div class="pro">
       <a href="p1.php"> <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f1.jpg?raw=true" alt=""></a>
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
       <a href="p2.php"> <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f2.jpg?raw=true" alt=""></a>
        <div class="des">
            <span>Crocodile</span>
            <h5>Graphic Tees</h5>
        
        <h4>$88</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
     <a href="p3.php"><img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f3.jpg?raw=true" alt=""></a>
        <div class="des">
            <span>Adidas</span>
            <h5>Hemp Tees</h5>
        
        <h4>$68</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f4.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Thermal Shirts</h5>
        
        <h4>$70</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f5.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Eco-Friendly T-Shirts</h5>
        
        <h4>$60</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f6.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
     
        </div>
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f7.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
     
        </div>
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>
     <div class="pro">
        <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/f8.jpg?raw=true" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-shirts</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
     
        </div>
        <h4>$78</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart"></i></a> 
     </div>


 

  
     
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n1.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n2.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n3.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n4.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n5.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n6.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n7.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
    <div class="pro">
       <img src="https://github.com/tech2etc/Build-and-Deploy-Ecommerce-Website/blob/main/img/products/n8.jpg?raw=true" alt="">
       <div class="des">
           <span>Adidas</span>
           <h5>Cartoon Astronaut T-shirts</h5>
       <div class="star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
    
       </div>
       <h4>$78</h4>
       </div>
       <a href="#"><i class="fal fa-shopping-cart"></i></a> 
    </div>
</div>

    
 </selection>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">&#8594;</a>
</section>


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
</body>
</html>