<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from bookland.dexignzone.com/xhtml/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:18 GMT -->
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
</head>
<body id="bg">
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
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
            <?php 
            include 'inc/connection.php';
            $id = $_SESSION['user_id'];

            $sql = "SELECT * FROM register WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            ?>
			<section class="content-inner bg-white">
				<div class="container">
                    <?php  
                    if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<div class="sticky-top">
								<div class="shop-account">
									<div class="account-detail text-center">
										<div class="my-image">
											<a href="javascript:void(0);">
												<img alt="" src="images/profile3.jpg">
											</a>
										</div>
										<div class="account-title">
											<div class="">
												<h4 class="m-b5"><a href="javascript:void(0);"><?php echo $row['name']; ?></a></h4>
                                                <p class="m-b0"><a href="javascript:void(0);"><?php echo $row['professional']; ?></a></p>
                                            </div>
										</div>
									</div>
									<ul class="account-list">
										<li>
											<a href="my-profile.php" ><i class="far fa-user" aria-hidden="true"></i> 
											<span>Profile</span></a>
										</li>
										<li>
											<a href="shop-order.php" class="active"><i class="flaticon-shopping-cart-1"></i>
											<span>My Order</span></a>
										</li>
										
										<li>
											<a href="books-grid-view.php"><i class="fa fa-briefcase" aria-hidden="true"></i> 
											<span>Shop</span></a>
										</li>
										
										<li>
											<a href="shop-logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> 
											<span>Log Out</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
                        <?php 
                            $id = $_SESSION['user_id'];
                            $sql2 = "SELECT * FROM orders WHERE user_id='$id'";
                            $result2 = mysqli_query($conn, $sql2);
                            ?>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="shop-bx shop-profile">
								<div class="shop-bx-title clearfix">
									<h5 class="text-uppercase">My Orders</h5>
								</div>
								<table class="table check-tbl">
								<thead>
									<tr>
										<th>Product name</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    if ($result2) {
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            $book_names = explode(',', $row2['book_name']);
                                            $book_prices = explode(',', $row2['book_price']);
                                            $book_quantities = explode(',', $row2['book_qut']);
                     
                                            if (count($book_names) === count($book_prices) && count($book_names) === count($book_quantities)) {
                                                // Iterate over the arrays
                                        for ($i = 0; $i < count($book_names); $i++) {
                                            $name = $book_names[$i];
                                            $price = $book_prices[$i];
                                            $quantity = $book_quantities[$i];

                                    ?>
									<tr>
										<td class="product-item-name"><?php echo $name; ?></td>
										<td class="product-item-price"><?php echo $quantity; ?></td>
										<td class="product-item-totle"><?php echo $price; ?></td>
									</tr>
                                    <?php  } } } } ?>
								</tbody>
							</table>
							</div>    
						</div>
					</div>
                    <?php  } } ?>
				</div>
			</section>
            <!-- Browse Jobs END -->
		</div>
    </div>
    <!-- Content END-->
    <br><br>
    <?php
include_once 'inc/connection.php'; // Assuming this file contains your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve form data
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $professional = $_POST['professional'];
    $language = $_POST['language'];
    $age = $_POST['age'];
    $desc = $_POST['desc'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $address = $_POST['address'];

    // Assuming you have a table named 'profile' with appropriate columns
   
   $sql = "UPDATE register SET name='$name', email='$email', number='$number', professional='$professional', language='$language', 
       address='$address', age='$age', `desc`='$desc', country='$country', postcode='$postcode', city='$city'
   WHERE id='$user_id'"; // Assuming you have a user ID stored in $user_id
     if (mysqli_query($conn, $sql)) {
        $message = "Profile updated successfully.";
        echo "<script>alert('$message');</script>";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $conn->close();
}
?>

	<!-- Footer -->
	<?php include 'inc/footer.php'; ?>
	<!-- Footer End -->
		
    <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<?php include 'inc/script.php'; ?>

</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:18 GMT -->
</html>
