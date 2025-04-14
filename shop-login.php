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
		
		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Login</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item">Login</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->
			
			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content">
									<h4>NEW CUSTOMER</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="shop-registration.php">CREATE AN ACCOUNT</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
									<form method="POST" action="">
										<h4 class="text-secondary">LOGIN</h4>
										<p class="font-weight-600">If you have an account with us, please log in.</p>
										<div class="mb-4">
											<label class="label-title">E-MAIL *</label>
											<input name="email" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="mb-4">
											<label class="label-title">PASSWORD *</label>
											<input name="pass" required="" class="form-control " placeholder="Type Password" type="password">
										</div>
										<div class="text-left">
											<button type="submit"  name ="login" class="btn btn-primary btnhover me-2">login</button>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End--> 
	</div>
    <?php
    include_once 'inc/connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // Check if user with provided email and password exists in the database
    $sql = "SELECT * FROM register WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User found, login successful
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['user_id'] = $row['id']; // Store user ID in session
        $_SESSION['user_name'] = $row['name']; //
        $_SESSION['user_email'] = $row['email']; //

        $message = "Login Sucessfully " ;
        echo "<script>alert('$message');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Invalid email or password. Please try again.";
        echo "<script>window.location.href='shop-login.php';</script>";
    }

    $conn->close();
}
?>

		<!-- Footer -->
		<?php  include 'inc/footer.php'; ?>
		<!-- Footer End -->
		
		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
<?php  include 'inc/script.php'; ?>
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:28 GMT -->
</html>