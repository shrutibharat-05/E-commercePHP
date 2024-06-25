<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
  
</head>
<body>
<?php
include("Includes/connect.php");
//include("remove.php");
$query = "SELECT * FROM cart";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);?><center><h1>Your Cart summary :</h1><?php
if ($total > 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        $product_price = $result['price'];
        $quantity = $result['Qty'];

        $totalPrice = $product_price * $quantity;
    
        ?> <center><form method="post">
    <table class="cart-table"  ><tr><th>Product ID</th><th>Quantity</th><th>Price</th><th>Product Name </th></tr>
      <td><?php echo  $result['prod_id'] ?></td><td><?php echo  $result['Qty'] ?></td><td><?php echo  $result['price']  ?></td><td><?php echo  $result['prodname'] ."<br><br>" ?>
       
  </tr><tr><td><?php echo "Total price for the products in your cart is $" . number_format($totalPrice, 2);
?></td></tr>   </table></form><?php
 }}else {
    echo "No records found";
}








?>








</center>
</body>
</html>