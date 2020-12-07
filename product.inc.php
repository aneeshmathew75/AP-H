
<!DOCTYPE html>
<html>
	<head>
		<title>AP&H | Ankita Paints & Hardware </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var quantity=document.getElementByName('quantity').value;
		</script>
	</head>
	<body>
		<?php
		include 'includes/check-if-added.php';
		?>
		<div class="container">
			<h1 class="box-title">&nbsp;Products in this colour</h1>
			<?php
				$query = "SELECT * FROM product ORDER BY productId ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-3">
				<form method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; margin-top:2rem;" align="center">
						<img src="images/<?php echo $row["productImage"]; ?>" style="width:50%; height:50%;" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["productName"]; ?></h4>

						<div class="form-group">
							<label for="unit" class=" form-control-label"><?php echo $row["unitLtr"]; ?> Ltr</label>
						</div>
						<h4 class="text-danger">₹ <?php echo $row["mrp"]; ?></h4>

						<div class="form-group">
							<label for="unit" class=" form-control-label">Qunatity</label>
							<input type="number" name="quantity" min = "1" value="1" class="form-control" />
						</div>

						<input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["mrp"]; ?>" />

						<?php if (!isset($_SESSION['userId'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                         <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart($row["productId"])) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart.add.php?id=<?php echo $row["productId"]?>" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                           	
                            ?>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			
		</div>
	</div>
	<br/>
	</body>
</html>

