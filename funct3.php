<?php
include("./Includes/connect.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['btn'])){
    $uadd=$_POST['email'];
    
    if($uadd!=""){
     $sql="INSERT INTO `email` (Email) VALUES('$uadd')"; 
      $data=mysqli_query($conn,$sql);
    }
    if($data){
      echo '<script>alert("Thanks!! You will be notified with new products")</script>';
    }
    else{
      echo "Failed to insert the data";
    }
}}
    
    
?> 

      