<?php
session_start();

if (!isset($_SESSION['admin_is_login'])) {

	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

	<!-- Title -->
	<title>Admin</title>

	<!--Favicon -->
	<?php
	include "inc/link.php";
	?>
</head>

<body class="app sidebar-mini">

	<!-- Switcher -->
	<?php
	include "inc/setting.php";
	?>
	<!-- End Switcher -->

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="https://php.spruko.com/azea/azea/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- Page -->
	<div class="page">
		<div class="page-main">
			<?php
			include "inc/sidebar.php";
			?>
			<!-- App-Content -->
			<div class="app-content main-content">
				<div class="side-app">

					<?php
					include "inc/header.php";
					?> <!--app header-->

					<!--/app header-->
					<!--Page header-->

					<!--End Page header-->

					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash1">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<?php 
											include "connection.php";
											$sql = "SELECT * FROM courses";
											$result = mysqli_query($conn, $sql) or die("No Result Found.");
											$rowcout = mysqli_num_rows($result);
											?>
											<div class="">
												<span class="fs-14 font-weight-normal">Total Courses</span>
												<h2 class="mb-2 number-font carn1 font-weight-bold"><?php echo $rowcout;  ?></h2>
												</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
										<?php 
											include "connection.php";
											$sql = "SELECT * FROM contact";
											$result = mysqli_query($conn, $sql) or die("No Result Found.");
											$rowcout = mysqli_num_rows($result);
											?>
											<div class="text-justify">
												<span>Total Inquiry</span>
												<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold"><?php echo $rowcout;  ?></h2>
												</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden dash1-card border-0 dash4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
										<?php 
											include "connection.php";
											$sql = "SELECT * FROM register";
											$result = mysqli_query($conn, $sql) or die("No Result Found.");
											$rowcout = mysqli_num_rows($result);
											?>
											<div class="text-justify">
												<span>Total Register Details</span>
												<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold"><?php echo $rowcout;  ?></h2>
												</span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--Row-->

				</div>
			</div>
			<!-- End app-content-->
			<?php
			include "inc/footer.php";
			?>

		</div>
	</div>

	<!-- End Page -->
	<?php
	include "inc/script.php";
	?> <!-- Back to top -->

</body>

</html>