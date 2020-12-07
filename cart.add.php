<?php
require("includes/connection.inc.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_SESSION['userId'];
    $item_id = $_GET['id'];
   	$quantity = $_GET['quantity'];
    
    $query = "INSERT INTO cart_demo(user_id,product_id,quantity,Status) VALUES('$user_id', '$item_id','$quantity','Added to Cart')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location: product.php');
}
?>   
