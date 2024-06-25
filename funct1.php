<?php

$query = "SELECT * FROM `signup`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
    if ($result = mysqli_fetch_assoc($data)) {
       echo "<br><h3>Hello  "."<b>".$result['Username']."</b>"." ...Welcome to Shruti's Fashon Hub! "."<br><br>";
       
    }
} 




?>