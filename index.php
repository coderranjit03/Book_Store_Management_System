<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:24:40 GMT -->

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>Bookland Book Store Ecommerce Website</title>

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

		<?php include 'inc/header.php'; ?>

		<div class="page-content bg-white">
			<?php
			include "inc/connection.php";
			$sql7 = "SELECT * FROM slider order by id desc limit 1";
			$result7 = mysqli_query($conn, $sql7) or die("No Result Found.");
			$counter = 1;
			?>
			<!--Swiper Banner Start -->
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php
					while ($row7 = mysqli_fetch_array($result7)) {
						$images7 = 'admin/Images/slider_img/' . $row7['s_image'];
					?>
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo $images7;  ?>" alt="First slide" >
						</div>
					<?php
					}
					?>
				</div>
			</div>

			<!--Swiper Banner End-->

			<!-- Client Start-->

			<!-- Client End-->

			<!--Recommend Section Start-->


			<!-- icon-box1 -->
			<section class="content-inner-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
							<div class="icon-bx-wraper style-1 m-b20 text-center">
								<div class="icon-bx-sm m-b10">
									<i class="flaticon-power icon-cell"></i>
								</div>
								<div class="icon-content">
									<h5 class="dz-title m-b10">Quick Delivery</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="icon-bx-wraper style-1 m-b20 text-center">
								<div class="icon-bx-sm m-b10">
									<i class="flaticon-shield icon-cell"></i>
								</div>
								<div class="icon-content">
									<h5 class="dz-title m-b10">Secure Payment</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
							<div class="icon-bx-wraper style-1 m-b20 text-center">
								<div class="icon-bx-sm m-b10">
									<i class="flaticon-like icon-cell"></i>
								</div>
								<div class="icon-content">
									<h5 class="dz-title m-b10">Best Quality</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
							<div class="icon-bx-wraper style-1 m-b20 text-center">
								<div class="icon-bx-sm m-b10">
									<i class="flaticon-star icon-cell"></i>
								</div>
								<div class="icon-content">
									<h5 class="dz-title m-b10">Return Guarantee</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- icon-box1 End-->
			<?php
			include 'inc/connection.php';
			$sql = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.offers
		 FROM `courses` INNER JOIN category ON courses.category=category.id WHERE courses.offers='' limit 5";
			$result = mysqli_query($conn, $sql) or die("No Result Found.");
			$counter = 1;
			?>
			<!-- Book Sale -->
			<section class="content-inner-1">
				<div class="container">
					<div class="section-head book-align">
						<h2 class="title mb-0">Books on Sale</h2>
						<div class="pagination-align style-1">
							<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
							<div class="swiper-pagination-two"></div>
							<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
						</div>
					</div>
					<div class="swiper-container books-wrapper-3 swiper-four">
						<div class="swiper-wrapper">
							<?php
							while ($row = mysqli_fetch_array($result)) {
								$images = 'admin/Images/courses_img/' . $row['c_images'];
							?>

								<div class="swiper-slide">
									<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
										<div class="dz-media">
											<a href="books-detail.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $images; ?>" alt="book" style="width: 210px;height: 300px;"> </a>
										</div>
										<div class="dz-content">
											<h5 class="title"><a href="#"><?php echo $row['heading']; ?></a></h5>
											<ul class="dz-tags">
												<li><a href="#"><?php echo $row['category']; ?></a></li>

											</ul>
											<div class="book-footer">
												<div class="rate">
													<i class="flaticon-star"></i> 6.8
												</div>
												<div class="price">
													<span class="price-num">&#8377;<?php echo $row['price']; ?></span>
													<del>&#8377;<?php echo $row['price'] + 200; ?></del>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</section>
			<!-- Book Sale End -->

			<!-- Feature Product -->

			<!-- Feature Product End -->
			<?php
			include 'inc/connection.php';
			$sql2 = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.offers
		 FROM `courses` INNER JOIN category ON courses.category=category.id WHERE courses.offers='Special Offers'";
			$result2 = mysqli_query($conn, $sql2) or die("No Result Found.");
			$counter = 1;
			?>
			<!-- Special Offer-->
			<section class="content-inner-2">
				<div class="container">
					<div class="section-head book-align">
						<h2 class="title mb-0">Special Offers</h2>
						<div class="pagination-align style-1">
							<div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
							<div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
						</div>
					</div>
					<div class="swiper-container book-swiper">
						<div class="swiper-wrapper">
							<?php
							while ($row2 = mysqli_fetch_array($result2)) {
								$images1 = 'admin/Images/courses_img/' . $row2['c_images'];
							?>
								<div class="swiper-slide">
									<div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
										<div class="dz-media">
											<a href="books-detail.php?id=<?php echo $row2['id']; ?>"><img src="<?php echo $images1; ?>" alt="/" style="width: 370px;height: 222px;"></a>
										</div>
										<div class="dz-info">
											<h4 class="dz-title"><a href="#"><?php echo $row2['heading']; ?></a></h4>
											<div class="dz-meta">
												<ul class="dz-tags">
													<li><a href="#"><?php echo $row2['category']; ?></a></li>

												</ul>
											</div>
											<div style="overflow: auto;">
												<p><?php echo $row2['details']; ?></p>
											</div>

											<div class="bookcard-footer">

												<div class="price-details">
													&#8377;<?php echo $row2['price']; ?> <del>&#8377;<?php echo $row2['price'] + 200; ?></del>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</section>
			<!-- Special Offer End -->

			<!-- Testimonial -->
			<section class="content-inner-2 testimonial-wrapper">
				<div class="container">
					<div class="testimonial">
						<div class="section-head book-align">
							<div>
								<h2 class="title mb-0">Testimonials</h2>
								<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="pagination-align style-1">
								<div class="testimonial-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
								<div class="testimonial-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-container testimonial-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="images/testimonial/testimonial1.jpg" alt="">
										</div>
										<div class="info-right">
											<h6 class="testimonial-name">Jason Huang</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial2.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Miranda Lee</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial3.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Steve Henry</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Thank you for filling a niche at an affordable price. Your book was just what I was looking for. Thanks again</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial4.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Angela Moss</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic radius">
											<img src="images/testimonial/testimonial2.jpg" alt="">
										</div>
										<div>
											<h6 class="testimonial-name">Miranda Lee</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
								<div class="testimonial-info">
									<ul class="dz-rating">
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-yellow"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
										<li><i class="flaticon-star text-muted"></i></li>
									</ul>
									<div class="testimonial-text">
										<p>Very impresive store. Your book made studying for the ABC certification exams a breeze. Thank you very much</p>
									</div>
									<div class="testimonial-detail">
										<div class="testimonial-pic">
											<img src="images/testimonial/testimonial1.jpg" alt="">
										</div>
										<div class="info-right">
											<h6 class="testimonial-name">Jason Huang</h6>
											<span class="testimonial-position">Book Lovers</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Testimonial End -->

			<!-- Latest News -->

			<!-- Latest News End -->

			<!-- Feature Box -->
			<section class="content-inner">
				<div class="container">
					<div class="row sp15">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-users icon-cell"></i>
								</div>
								<?php
								include 'inc/connection.php';
								$sql1 = "SELECT COUNT(*) as order_count FROM orders";
								$result1 = $conn->query($sql1);
								if ($result1) {
									// Fetch the result as an associative array
									$row1 = $result1->fetch_assoc();
								?>
									<div class="icon-content">
										<h2 class="dz-title counter m-b0"><?php echo $row1["order_count"]; ?></h2>
										<p class="font-20">Happy Customers</p>
									</div>
								<?php  } ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="icon-bx-wraper style-2 m-b30 text-center">
								<div class="icon-bx-lg">
									<i class="fa-solid fa-book icon-cell"></i>
								</div>
								<?php
								include 'inc/connection.php';
								$sql12 = "SELECT COUNT(*) as order_count FROM courses";
								$result12 = $conn->query($sql12);
								if ($result12) {
									// Fetch the result as an associative array
									$row12 = $result12->fetch_assoc();
								?>
									<div class="icon-content">
										<h2 class="dz-title counter m-b0"><?php echo $row12["order_count"]; ?></h2>
										<p class="font-20">Book Collections</p>
									</div>
								<?php  } ?>
							</div>
						</div>


					</div>
				</div>
			</section>
			<!-- Feature Box End -->

			

		</div>

		<!-- Footer -->
		<footer class="site-footer style-1">
			<!-- Footer Category -->

			<!-- Footer Category End -->

			<!-- Footer Top -->
			<?php include 'inc/footer.php'; ?>
			<!-- Footer Top End -->

			<!-- Footer Bottom -->

			<!-- Footer Bottom End -->

		</footer>
		<!-- Footer End -->

		<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
	<?php include 'inc/script.php'; ?>
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:11 GMT -->

</html>