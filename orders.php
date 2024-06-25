<?php

include("./Includes/connect.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
    $id=$_POST['uname'];
    $name = $_POST['pname'];
    $price=$_POST['add'];

    if($id!="" && $name!="" && $price!=""){
     $sql="INSERT INTO `orders` (cust_name,Prod_name,uAddress) VALUES('$id', '$name','$price')"; 
      $data=mysqli_query($conn,$sql);
    }
    if($data){
        echo'<script>alert("Order has been placed successfully!")</script>';
        header("Location: shop.php");
    }
    else{
      echo "Failed to place your order";
    }
}}
    else {
            echo "Enter corect data";
        }
    



?>