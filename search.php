<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("./Includes/connect.php");
// include("orders.php")
;
$searchTerm = $_GET['search_text'];

$searchTerm = mysqli_real_escape_string($conn, $searchTerm);

$sql = "SELECT * FROM products WHERE Prod_name LIKE '%$searchTerm%' or Prod_id LIKE '%$searchTerm%' or Category LIKE '%$searchTerm%' or Sub_cat LIKE '%$searchTerm%'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     
    while($row = mysqli_fetch_assoc($result)) {
        // $imageUrl = "uploads/".$fileName;
           echo'
         <div class="pro-container"><div class="pro">
        
         '."<h3>". $row['Prod_id'] .
          " ". $row['Prod_name'] . " <br>" . $row['Price'] ."<br> ".$row['Category_id']. "</h3>" ."<br><br>".
          '
          '?><form action="form.php"><button name="order" style="font-size: 21px;
    font-weight: 300;
    padding: 15px 30px;
    color: #fff;
    background-color: #088178;
    border-radius: ;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.2s;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;">Place Order</button><br><br>
</form>
</body>
</html>

<?php
       ;
       
       
       
    }
} else {
    echo "No results found";
}
 mysqli_close($conn);
?>
<br><br><br>

