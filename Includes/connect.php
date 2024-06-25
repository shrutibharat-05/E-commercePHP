<?php

$conn= new mysqli("localhost","root","","e-commerce");
if($conn->connect_error){
    die("connection failed!".$conn->connect_error);
}


?>