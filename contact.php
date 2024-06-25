<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<link rel="stylesheet" href="mail.css"> <!-- Replace "styles.css" with the path to your CSS file -->
</head>
<body>

<div class="form-container">
  <h2 class="form-title">Contact Us</h2>
  <form action="" method="POST">
  <input type="text" class="text-input" name="name" placeholder="Your Name" required>
 
    <textarea name="message" class="form-input" placeholder="Your Feedback" required></textarea>
    
    <button type="submit" name="submit"class="submit-btn">Send Feedback</button>
  </form>
</div><center>
<?php
include("./Includes/connect.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
   $ms=$_POST['message'];
   $name=$_POST['name'];
    if($ms!=""){
     $sql="INSERT INTO `Feedback` (Message,Username) VALUES('$ms','$name')"; 
      $data=mysqli_query($conn,$sql);
    }
    if($data){
       header("Location: feedback.php");
    }
    else{
      echo "Failed to insert the data";
    }
} }

    else {
            echo "fill all the data";
        }


?></center>
</body>
</html>
