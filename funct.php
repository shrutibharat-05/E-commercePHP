<?php

$query = "SELECT * FROM `signup`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
    if($result = mysqli_fetch_assoc($data)) {
       echo "<br><br><h3>Welcome back  ".$result['Username']." ... Happy Shopping !</h3>"."<br>";
       
    }
} 




?>