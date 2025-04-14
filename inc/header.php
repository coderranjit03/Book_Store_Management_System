<!-- Header -->
<?php  session_start(); ?>
<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.html"><img src="images/logo.png" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
						<?php  
							if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {?>
							<?php 
							   include 'inc/connection.php';
							   $id = $_SESSION['user_id'];
							   $sql = "SELECT * FROM cart WHERE user='$id' limit 3";
							   $result = mysqli_query($conn, $sql);
							   $sql2 = "SELECT * FROM cart WHERE user='$id'";
							   $result2 = mysqli_query($conn, $sql2);
							   $row_count = mysqli_num_rows($result2);
							   
							  ?>
							<li class="nav-item">
								<button type="button" class="nav-link box cart-btn">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
									<span class="badge"><?php echo $row_count; ?></span>
								</button>
                              
								<ul class="dropdown-menu cart-list">
									<?php if ($result) {
                   					 while ($row = mysqli_fetch_assoc($result)) { 
										$images = 'admin/Images/courses_img/' . $row['image'];
										?>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="<?php echo $images; ?>"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="#" class="media-heading"><?php echo 	$row['name']; ?></a></h6>
												<span class="dz-price">&#8377;<?php echo $row['price']*$row['qut']; ?></span>
											</div> 
										</div>
									</li>
											<?php  } } ?>
									<li class="text-center d-flex">
										<a href="shop-cart.php" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
										<!-- <a href="shop-checkout.html" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a> -->
									</li>
								</ul>
							</li>
							
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile3.jpg" alt="/">
									<div class="profile-info">
										<h6 class="title"><?php echo $_SESSION['user_name']; ?></h6>
									</div>
								</a>
								<div class="dropdown-menu py-0 dropdown-menu-end">
									<div class="dropdown-header">
										<h6 class="m-0"><?php echo $_SESSION['user_name']; ?></h6>
										<span><?php echo $_SESSION['user_email']; ?></span>
									</div>
									<div class="dropdown-body">
										<a href="my-profile.php" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
												<span class="ms-2">Profile</span>
											</div>
										</a>
										
										
									</div>
									<div class="dropdown-footer">
										<a class="btn btn-primary w-100 btnhover btn-sm" href="shop-logout.php">Log Out</a>
									</div>
								</div>
							</li>
							<?php }else{ ?>
							
                            <a href="shop-login.php" class="nav-link box cart-btn">
									
                                    <span class="badge">Login</span>
                            </a>&nbsp;&nbsp;&nbsp;
                                <a href="shop-registration.php"  class="nav-link  cart-btn">
									
                                    <span class="badge">Register</span>
                                </a>
							<?php  }	?>
						</ul>
					</div>
				</div>
				
				<!-- header search nav -->
				
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.html"><img src="images/logo.png" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
                        <li><a href="index.php"><span>Home</span></a></li>
							
							
							<li><a href="about-us.php"><span>About Us</span></a></li>
							
							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>
								<ul class="sub-menu">
									<li><a href="books-grid-view.php">Shop</a></li>
									
								</ul>
							</li>
							
							<li><a href="contact-us.php"><span>Contact Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->