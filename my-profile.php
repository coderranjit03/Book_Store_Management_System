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
											<a href="my-profile.php" class="active"><i class="far fa-user" aria-hidden="true"></i> 
											<span>Profile</span></a>
										</li>
										<li>
											<a href="shop-order.php"><i class="flaticon-shopping-cart-1"></i>
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
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="shop-bx shop-profile">
								<div class="shop-bx-title clearfix">
									<h5 class="text-uppercase">Basic Information</h5>
								</div>
								<form action="" method="POST">
									<div class="row m-b30">
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput1" class="form-label">Your Name:</label>
                                                <input type="hidden"  value="<?php echo $row['id']; ?>" name="user_id" id="user_id">
												<input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput2" class="form-label">Professional title:</label>
												<input type="text" class="form-control" value="<?php echo $row['professional']; ?>" name="professional" id="professional" placeholder=" Enter Professional title">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput3" class="form-label">Languages:</label>
												<input type="text" class="form-control" value="<?php echo $row['language']; ?>" name="language"  id="language" placeholder=" Enter Language">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput4" class="form-label">Age:</label>
												<input type="text" class="form-control" value="<?php echo $row['age']; ?>" name="age" id="age" placeholder="Enter Age">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											
											<div class="mb-3">
												<label for="exampleFormControlTextarea" class="form-label">Description:</label>
												<textarea class="form-control" id="desc" rows="5" name="desc"  placeholder="About Your Self"><?php echo $row['desc']; ?></textarea>
											</div>
										</div>
									</div>
									<div class="shop-bx-title clearfix">
										<h5 class="text-uppercase">Contact Information</h5>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput5" class="form-label">Contact Number:</label>
												<input type="text" value="<?php echo $row['number']; ?>" name="number" class="form-control" id="number" placeholder="Enter Number">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput6" class="form-label">Email Address:</label>
												<input type="text" value="<?php echo $row['email']; ?>" name="email" class="form-control" id="email" placeholder="Enter Email">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput7" class="form-label">Country:</label>
												<input type="text" value="<?php echo $row['country']; ?>" class="form-control" name="country" id="country" placeholder="Enter Country Name">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput9" class="form-label">City:</label>
												<input type="text" value="<?php echo $row['city']; ?>" class="form-control" name="city" id="city" placeholder=" Enter City Name">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput8" class="form-label">Postcode:</label>
												<input type="text" value="<?php echo $row['postcode']; ?>" class="form-control" name="postcode" id="postcode" placeholder="Enter Postcode">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="mb-4">
												<label for="formcontrolinput10" class="form-label">Full Address:</label>
												<input type="text" value="<?php echo $row['address']; ?>" class="form-control" name="address" id="address" placeholder="Enter Address">
											</div>
										</div>
									</div>
									<button type="submit" name="submit" class="btn btn-primary btnhover">Save</button>
								</form>
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
