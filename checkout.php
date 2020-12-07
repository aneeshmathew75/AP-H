<?php
	require 'includes/connection.inc.php';
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
		<h1>Check Out</h1>
    </div>

    <?php
    $cart_total=0;

if(isset($_POST['submit'])){
	$address=get_safe_value($con,$_POST['address']);
	$city=get_safe_value($con,$_POST['city']);
	$pincode=get_safe_value($con,$_POST['pincode']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
	$user_id=$_SESSION['USER_ID'];
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		$cart_total=$cart_total+($price*$qty);
		
	}
	$total_price=$cart_total;
	$payment_status='pending';
	if($payment_type=='cod'){
		$payment_status='success';
	}
	$order_status='pending';
	$added_on=date('Y-m-d h:i:s');
	
	
	mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price')");
	
	$order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");
	}
	
	unset($_SESSION['cart'])
	?>
	<script>
		window.location.href='thank_you.php';
	</script>
	<?php
	
	
}
?>
<br>
    <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                   
									<div class="accordion__title">
                                    Address Information
                                    </div>
									<form method="post">
										<div class="accordion__body">
											<div class="bilinfo">
												
													<div class="row">
                                                        <div class="col-md-6">
															<div class="single-input">
																<input type="text" name="city" placeholder="First Name" style="width:90%;" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="pincode" placeholder="Last Name"  style="width:58%;" required>
															</div>
														</div>
														<div class="col-md-12">
															<div class="single-input">
																<input type="text" name="address" placeholder="Street Address" style="width:80%;" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="city" placeholder="City/State" style="width:90%;" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="pincode" placeholder="Post code/ zip"  style="width:58%;" required>
															</div>
														</div>
													</div>
												
											</div>
                                        </div>
                                    <div class="accordion__title">
                                    Contact Information
                                    </div>
									<form method="post">
										<div class="accordion__body">
											<div class="bilinfo">
												
													<div class="row">
														<div class="col-md-4">
															<div class="single-input">
																<input type="text" name="address" placeholder="Mobile Number" style="width:90%;" required>
															</div>
														</div>
														<div class="col-md-8">
															<div class="single-input">
																<input type="text" name="city" placeholder="Email ID" style="width:70%;" required>
															</div>
														</div>
													</div>
												
											</div>
										</div>
										<div class="accordion__title">
											payment information
										</div>
										<form method="post">
										<div class="accordion__body">
											<div class="bilinfo">
												
													<div class="row">
														<div class="col-md-12">
															<div class="single-input">
																<input type="text" name="address" placeholder="Card Number" style="width:80%;" required>
															</div>
														</div>
														<div class="col-md-12">
															<div class="single-input">
																<input type="text" name="city" placeholder="Name on card" style="width:80%;" required>
															</div>
                                                        </div>
                                                        <div class="col-md-6">
															<div class="single-input">
																<input type="text" name="city" placeholder="Valid Thru (MM/YY)" style="width:80%;" required>
															</div>
                                                        </div>
                                                        <div class="col-md-6">
															<div class="single-input">
																<input type="text" name="city" placeholder="CVV" style="width:58%;" required>
															</div>
														</div>
													</div>
												
											</div>
                                        </div>
                                        <div class="col-md-12">
											<div class="single-input" style="font-size: 2rem; width:70%; text-align: center;">
                                                <input type="submit" style="padding:.5rem 5rem;"name="submit"/>
                                            </div>
										</div>
										
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                                <?php
								$cart_total=0;
								foreach($_SESSION['cart'] as $key=>$val){
								$productArr=get_product($con,'','',$key);
								$pname=$productArr[0]['name'];
								$mrp=$productArr[0]['mrp'];
								$price=$productArr[0]['price'];
								$image=$productArr[0]['image'];
								$qty=$val['qty'];
								$cart_total=$cart_total+($price*$qty);
								?>
								<div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>"  />
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#"><?php echo $pname?></a>
                                        <span class="price"><?php echo $price*$qty?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a>
                                    </div>
                                </div>
								<?php } ?>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price"><?php echo $cart_total?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php
    include 'includes/scroll-top.php';
?>	
</body>
</html>