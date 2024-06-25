<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User SignUp</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: calc(100% - 12px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  button{
    font-size: 21px;
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
  }
</style>
</head>
<body>

<div class="container">
  <h2>User Sign Up</h2>
  <form method="post">
    
    Username:<input type="text" id="username" name="uname" required>     
    Email Address:<input type="text" id="email" name="add" required>       
    Password:<input type="password" id="password" name="psw"  required>
   

   <center><input type="submit" value="Sign Up" name="submit"></center>
  </form>
</div>

<center>
 <?php
include("./Includes/connect.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $pass = $_POST['psw'];
    $email=$_POST['add'];

    if($uname!="" && $pass!="" && $email!=""){
     $sql="INSERT INTO `signup` (Username,Email,Spassword) VALUES('$uname', '$email','$pass')"; 
      $data=mysqli_query($conn,$sql);
    }
    if($data){
      header("Location: index1.php");
    }
    else{
      echo "Failed to insert the data";
    }
}}
    else {
            echo "fill all the data";
        }
    
    
    
    
    
?> 

      </center></body>
</html>