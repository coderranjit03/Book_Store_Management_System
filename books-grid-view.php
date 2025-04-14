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
		
		<div class="page-content bg-white">
		<!--banner-->
		<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Books</h4>
				</div>
				<?php 
         include 'inc/connection.php'; 
        $sql = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.offers
		 FROM `courses` INNER JOIN category ON courses.category=category.id WHERE courses.offers=''";
        $result = mysqli_query($conn, $sql) or die("No Result Found.");
        $counter = 1;
        ?>
				
				
				<div class="row book-grid-row">

                <?php
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $images = 'admin/Images/courses_img/' . $row['c_images'];
                                                ?>
					<div class="col-book style-1">
						<div class="dz-shop-card style-1">
							<div class="dz-media">
                            <a href="books-detail.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $images; ?>" alt="book">	</a>								
							</div>
							
							<div class="dz-content">
                            <h5 class="title"><a href="#"><?php echo $row['heading']; ?></a></h5>
								<ul class="dz-tags">
                                <li><a href="#"><?php echo $row['category']; ?></a></li>
								</ul>
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>	
									<li><i class="flaticon-star text-yellow"></i></li>		
									<li><i class="flaticon-star text-yellow"></i></li>		
								</ul>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">&#8377;<?php echo $row['price']; ?></span>
										<del>&#8377;<?php echo $row['price']+200; ?></del>
									</div>
								
								</div>
							</div>
						</div>
					</div>
                    <?php } ?>
					
				
				</div>
				
			</div>
		</section>
		
		
		
		
		
	</div>
		<!--icon-box3 section-->
		
		
		<!-- Testimonial -->
		
		<!-- Testimonial End -->
		
		<!-- Feature Box -->
		
		<!-- Feature Box End -->
		
		<!-- Client Start-->
		
		<!-- Client End-->
		<!-- Newsletter -->
		
		<!-- Newsletter End -->
		
	</div>
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