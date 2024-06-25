<?php
include("Includes/connect.php");


$logout="DELETE from `signup` ";
$result= mysqli_query($conn,$logout);


header("Location: summary.php");
exit;

?>
