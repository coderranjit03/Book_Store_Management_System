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
							   $sql = "SELECT * FROM cart WHERE user='$id' limit 3";
							   $result = mysqli_query($conn, $sql);
							   $row_count = mysqli_num_rows($result);
							  ?>
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			<?php 
							   include 'inc/connection.php';
							   $id = $_SESSION['user_id'];
							   $sql = "SELECT * FROM cart WHERE user='$id'";
							   $result = mysqli_query($conn, $sql);
							   $row_count = mysqli_num_rows($result);
                               $total_price = 0;
                              
                               while ($row = mysqli_fetch_assoc($result)) {
                               
                                $images = 'admin/Images/courses_img/' . $row['image'];
                                $item_name = $row['name'];
                                $item_quantity = $row['qut'];
                                $price1 = $row['price'];
                                $item_price = $row['price'] * $row['qut']; // Calculate the price for this item
                                $total_price += $item_price;
                                $names[] = $item_name; 
                                $price[] = $price1; 
                                $quantity[] = $item_quantity; 
                               }
                               $comma_separated_names = implode(', ', $names);
                               $comma_separated_price = implode(', ', $price);
                               $comma_separated_quantity = implode(', ', $quantity);
							  ?>
			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<div class="container">
					<form class="shop-form" action="" method="POST">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="widget">
									<h4 class="widget-title">Billing & Shipping Address</h4>
									
									<div class="row">
										<div class="form-group col-md-6">
                                        <input type="hidden" class="form-control" value="<?php echo $comma_separated_names; ?>" name="book_name" required>
                                        <input type="hidden" class="form-control" value="<?php echo $comma_separated_price; ?>" name="book_price" required>
                                        <input type="hidden" class="form-control" value="<?php echo $comma_separated_quantity;  ?>" name="book_qut" required>

											<input type="text" class="form-control" name="fname" placeholder="First Name" required>
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
										</div>
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" name="address" placeholder="Address" required>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, unit etc." required> 
										</div>
                                        <div class="form-group col-md-12">
											<input type="text" class="form-control" name="country" placeholder="Country" required>
										</div>
										
									</div>
									<div class="row">
										<div class="form-group col-md-4">
											<input type="text" class="form-control" name="state" placeholder="State" required>
										</div>
                                        <div class="form-group col-md-4">
											<input type="text" class="form-control" name="city" placeholder="Town / City" required>
										</div>
										<div class="form-group col-md-4">
											<input type="text" class="form-control" name="zip" placeholder="Postcode / Zip" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-6">
											<input type="email" class="form-control" name="email" placeholder="Email" required>
										</div>
										<div class="form-group col-md-6">
											<input type="text" class="form-control" name="phone" placeholder="Phone" required>
										</div>
									</div>
									
								</div>
							</div>
                            
							<div class="col-lg-6">
								<h4 class="widget-title">Order Total</h4>
								<table class="table-bordered check-tbl mb-4">
									<tbody>
										<tr>
											<td>Order Subtotal</td>
											<td class="product-price"><?php echo $total_price; ?></td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td>Free Shipping</td>
										</tr>
										<tr>
											<td>Total</td>
											<td class="product-price-total"><?php echo $total_price; ?></td>
										</tr>
									</tbody>
								</table>
								<h4 class="widget-title">Payment Method</h4>
								<div class="form-group">
									<select class="default-select" name="payment_method" required>
                                        <option>Select Payment Method</option>
										<option value="COD">Cash On Delivary</option>
									</select>	
								</div>
                                <br>
						</div>
                        <div class="form-group" style="text-align:center;">
									<button type="submit" name="checkout" class="btn btn-primary btnhover" type="button">Place Order Now </button>
								</div>
						</div>
					</form>
					<div class="dz-divider bg-gray-dark text-gray-dark icon-center  my-5"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
					
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
		</div>
    <br><br><br><br>
		<!-- Footer -->
		<?php  include 'inc/footer.php'; ?>
		<!-- Footer End -->
		<?php
include_once 'inc/connection.php'; // Assuming this file contains your database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkout'])) {
    $user_id = $_SESSION['user_id'];
    $book_name = $_POST['book_name'];
    $book_price = $_POST['book_price'];
    $book_qut = $_POST['book_qut'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $apartment = $_POST['apartment'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment_method']; // Assuming you add a name attribute to your select element

    // Construct the SQL query to insert the order into the orders table
    $sql = "INSERT INTO orders (user_id, book_name, book_price, book_qut, fname, lname, address, apartment, country, state, city, zip, email, phone, payment_method)
            VALUES ('$user_id','$comma_separated_names', '$comma_separated_price', '$comma_separated_quantity', '$fname', '$lname', '$address', '$apartment', '$country', '$state', '$city', '$zip', '$email', '$phone', '$payment_method')";

    if (mysqli_query($conn, $sql)) {
        $message = "Order placed successfully" ;
        echo "<script>alert('$message');</script>";
        $sql2="DELETE FROM cart WHERE user='$user_id'";
        $result2=mysqli_query($conn,$sql2) or die ("Query Unsucessfull");
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
<?php  include 'inc/script.php'; ?>
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:28 GMT -->
</html>