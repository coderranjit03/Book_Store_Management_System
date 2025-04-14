<?//php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:28 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland-Book Store Ecommerce Website</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <?php include 'inc/links.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	
</head>

<body>
	<div class="page-wraper">
		<div id="loading-area" class="preloader-wrapper-1">
			<div class="preloader-inner">
				<div class="preloader-shade"></div>
				<div class="preloader-wrap"></div>
				<div class="preloader-wrap wrap2"></div>
				<div class="preloader-wrap wrap3"></div>
				<div class="preloader-wrap wrap4"></div>
				<div class="preloader-wrap wrap5"></div>
			</div> 
		</div>
		<!-- Header -->
		<?php  include 'inc/header.php'; ?>
		<!-- Header End -->
		<?php 
							   include 'inc/connection.php';
							   $id = $_SESSION['user_id'];
							   $sql = "SELECT * FROM cart WHERE user='$id'";
							   $result = mysqli_query($conn, $sql);
							   $row_count = mysqli_num_rows($result);
							  ?>
		<section class="content-inner shop-account">
			<!-- Product -->
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead>
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Quantity</th>
										<th>Total</th>
										<th class="text-end">Close</th>
									</tr>
								</thead>
								<tbody>
                                <?php $total_price = 0; if ($result) {
                   					 while ($row = mysqli_fetch_assoc($result)) { 
										$images = 'admin/Images/courses_img/' . $row['image'];
                                        $item_price = $row['price'] * $row['qut']; // Calculate the price for this item
                                        $total_price += $item_price;
										?>
									<tr>
										<td class="product-item-img"><img src="<?php echo $images; ?>" alt=""></td>
										<td class="product-item-name"><?php echo $row['name']; ?></td>
										<td class="product-item-price">&#8377;<?php echo $row['price']; ?></td>
                                        <td class="product-item-price"><?php echo $row['qut']; ?></td>
										<td class="product-item-totle">&#8377;<?php echo $row['price']*$row['qut']; ?></td>
										<td class="product-item-close"><a href="deletecart.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')" class="ti-close"></a></td>
									</tr>
                                        <?php  } } ?>
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="row">
					
					<div class="col-lg-6">
						<div class="widget">
							<h4 class="widget-title">Cart Subtotal</h4>
							<table class="table-bordered check-tbl m-b25">
								<tbody>
									<tr>
										<td>Order Subtotal</td>
										<td>&#8377;<?php echo $total_price; ?></td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									
								</tbody>
							</table>
							<div class="form-group m-b25">
								<a href="shop-checkout.php" class="btn btn-primary btnhover" type="button">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Product END -->
		</section>
    <br><br><br><br>
		<!-- Footer -->
		<?php  include 'inc/footer.php'; ?>
		<!-- Footer End -->
		
		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
<?php  include 'inc/script.php'; ?>
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:28 GMT -->
</html>