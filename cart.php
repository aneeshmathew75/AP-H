<?php
    
    require 'includes/connection.inc.php';
    include 'includes/check-if-added.php';

//if (isset($_GET['productId']) && is_numeric($_GET['productId']))
//{
/*	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{*/
		/*	$count = count($_SESSION["shopping_cart"]);
			$user_id = $_SESSION["userId"];
			$item_id = $_GET["id"];
			$item_name = $_POST["hidden_name"];
			$item_price	= $_POST["hidden_price"];
			$item_quantity = $_POST["quantity"];

		//	$_SESSION["shopping_cart"][$count] = $item_array;
			$query = "INSERT INTO cart (RegID, productId, productName, mrp, quantity) VALUES('$user_id','$item_id', '$item_name', '$item_price', '$item_quantity')";
			$result = mysqli_query($conn, $query);
				
	//	}
	/*	else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}*/
/*
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}*/

?>

<!DOCTYPE html>
<html>
	<head>
		<title>AP&H | Ankita Paints & Hardware </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/header.css">

	<style>
	.header-background{
    background: url(img/hero.jpg);
    -webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	background-repeat: no-repeat;
	height: 40vh;	
	position: relative;
	}
	.header-background h1{
		margin: 0;
    	position: absolute;
    	top: 50%;
    	left: 50%;
    	margin-right: -50%;
		transform: translate(-50%, -50%);
		color: #fff;
		font-weight: 700;
		
	}
	</style>
	</head>
	<body>
    <?php
        include 'includes/header.php';
    ?>
	
	<div class="header-background">
		<h1>Shopping Cart</h1>
	</div>
    <div class="container">
    <h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<?php
                        $sum = 0;
                        $user_id = $_SESSION['userId'];
                        $query = "SELECT product.productName,product.mrp,product.unitLtr,product.quantity from cart_demo JOIN product on cart_demo.product_id=product.productId where cart_demo.userId='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						
					</tr>
					<tr>
						<td colspan="3" alignmentment="right">Total</td>
						<td alignment="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
				
						
				</table>
			</div>
		</div>
	<br/>
	<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="buttons-cart--inner">
                <div class="buttons-cart">
                    <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                </div>
                <div class="buttons-cart checkout--btn">
                <a href="checkout.php">checkout</a>
                </div>
            </div>
        </div>
	</div>
<?php
    include 'includes/scroll-top.php';
?>
</body>
</html>