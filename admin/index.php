<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

	<!-- Title -->
	<title></title>

	<!--Favicon -->
	<?php
	include "inc/link.php";
	?>


</head>

<body>

	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="https://php.spruko.com/azea/azea/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<div class="register1">
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-xl-7 col-lg-12">
									<div class="row p-0 m-0">
										<div class="col-lg-6 p-0">
											<div class="text-justified text-white p-5 register-1 overflow-hidden">
												<div class="custom-content">
													<div class="mb-5 br-7">
														<h1></h1>
													</div>
													<div class="ms-5">
													<img src="img/pk_logo.png" alt="">
														<div class="fs-18 mb-6 font-weight-bold text-white">Welcome </div>
														<!-- <div class="mb-6 text-white-50">
																	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem et esse in velit deleniti facilis quo!
																</div> -->
														<!-- <h6 class="text-white-50">Don't Have an Account?</h6> -->
														<!-- <a href="register-1.html" class="btn btn-white text-primary text-transparent font-weight-bold ">Create Here</a> -->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-8 col-lg-6 p-0 mx-auto">
											<div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
												<div class="card-body">
													<div class="text-center mb-3">
														<h1 class="mb-2">Log In</h1>
														<a href="javascript:void(0);" class="">Hello There !</a>
													</div>
													<?php

													$msg = '';
													if (isset($_POST['login'])) {
														# code...
														$user = $_POST['username'];
														$pas = $_POST['password'];
														if ($user == 'admin' & $pas == 'admin2023@') {
															$_SESSION['admin_is_login'] = $pas;
															echo "<script>window.location.href='main-dashboard.php';</script>";
														}
													}
													?>
													<form action="" method="post" class="mt-5">
														<div class="input-group mb-4">
															<div class="input-group-text">
																<i class="fe fe-user"></i>
															</div>
															<input type="text" class="form-control " name="username" placeholder="Username">
														</div>
														<div class="input-group mb-4">
															<div class="input-group" id="Password-toggle">
																<a href="#" class="input-group-text">
																	<i class="fe fe-eye" id="togglePassword" aria-hidden="true"></i>
																</a>
																<input class="form-control" name="password" id="id_password" type="password" placeholder="Password">
															</div>
														</div>

														<div class="form-group text-center mb-3">
															<input type="submit" class="btn btn-primary btn-lg w-100 br-7" title="Log In" name="login" value="Login"></input>
														</div>

														<!-- <div class="form-group text-center mb-3">
															<a href="" name="login" class="btn btn-primary btn-lg w-100 br-7">Log In</a>
														</div> -->

													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- End Page -->
	<!-- Jquery js-->
	<?php
	include "inc/script.php";
	?>

	<script>
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#id_password');

		togglePassword.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');
		});
	</script>
</body>

</html>