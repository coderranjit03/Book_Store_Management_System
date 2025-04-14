<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/books-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:17 GMT -->
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
	<?php include 'inc/header.php'; ?>
	<!-- Header End -->
    <?php  
    $id = $_GET['id'];
    include 'inc/connection.php'; 
        $sql = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.pages,courses.language,courses.year,courses.writen_by
        FROM `courses` INNER JOIN category ON courses.category=category.id WHERE courses.id=$id";
        $result = mysqli_query($conn, $sql) or die("No Result Found.");
        $counter = 1;
    ?>
	<div class="page-content bg-grey">
		<section class="content-inner-1">
        <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $images = 'admin/Images/courses_img/' . $row['c_images'];
						$date = $row['year']; // Example date in yyyy-mm-dd format
						$year = date("Y", strtotime($date));
                    ?>
			<div class="container">
           
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img src="<?php  echo $images; ?>" alt="book" style="width: 400px;height: 571px;">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title"><?php  echo $row['heading']; ?></h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>		
												<li><i class="flaticon-star text-muted"></i></li>		
											</ul>
											<h6 class="m-b0">4.0</h6>
										</div>
										
									</div>
								</div>
								<div class="dz-body">
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
													<img src="images/profile2.jpg" alt="book">
													<div>
														<span>Writen by</span><?php  echo $row['writen_by']; ?>
													</div>
												</div>
											</li>
											<li><span>Year</span><?php  echo $year; ?></li>
										</ul>
									</div>
									<p class="text-1"><?php  echo $row['details']; ?></p>
									
                                    <div class="book-footer">
										<div class="price">
											<h5>&#8377;<?php  echo $row['price']; ?></h5>
											<p class="p-lr10">&#8377;<?php  echo $row['price']+200; ?></p>
										</div>
										<form action="" method="POST">
										<div class="product-num">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="qut" type="text" value="1" name="qut"/>
												<input id="user" type="hidden" value="<?php  echo $_SESSION['user_id']; ?>" name="user"/>
												<input id="name" type="hidden" value="<?php  echo $row['heading']; ?>" name="name"/>
												<input id="image" type="hidden" value="<?php  echo $row['c_images']; ?>" name="image"/>
												<input id="price" type="hidden" value="<?php  echo  $row['price']; ?>" name="price"/>
											</div>
											<?php 	if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
												echo '<button type="submit"  name="add_to_cart" class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Add to cart </span></button>';
												
											} else{
												echo '<button type="button" id="addToCartButton"  class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Add to cart </span></button>';
											}
												?>
											
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xl-8">
						<div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a></li>
                                <!-- <li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li> -->
                            </ul>
							<div class="tab-content">
								<div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border book-overview">
                                        <tr>
                                            <th>Book Title</th>
                                            <td><?php  echo $row['heading']; ?></td>
                                        </tr>
										<tr>
                                            <th>Writen by</th>
                                            <td><?php  echo $row['writen_by']; ?></td>
                                        </tr>
										<tr>
                                            <th>Ediiton Language</th>
                                            <td><?php  echo $row['language']; ?></td>
                                        </tr>
                                      
                                        <tr>
                                            <th>Date Published</th>
                                            <td><?php  echo $row['year']; ?></td>
                                        </tr>
										
										<tr>
                                            <th>Pages</th>
                                            <td><?php  echo $row['pages']; ?></td>
                                        </tr>
										
                                        
                                    </table>
                                </div>
								<div id="developement-1" class="tab-pane">
                                   
								</div>
							</div>
						</div>
					</div>
                    <?php } 
                    ?>
					<?php  
					 include "inc/connection.php";
					 $sql1 = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.pages,courses.language,courses.year,courses.writen_by FROM `courses` INNER JOIN category ON courses.category=category.id   ORDER BY courses.id DESC
					 LIMIT 3 ";
					 $result1 = mysqli_query($conn, $sql1) or die("No Result Found.");
					 $counter = 1;

					?>
					<div class="col-xl-4 mt-5 mt-xl-0">
						<div class="widget">
							<h4 class="widget-title">Related Books</h4>
							<div class="row">
								<?php 
							 while ($row1 = mysqli_fetch_array($result1)) {
								 $images = 'admin/Images/courses_img/' . $row1['c_images'];
							
							?>
								<div class="col-xl-12 col-lg-6">
									<div class="dz-shop-card style-5">
										<div class="dz-media">
											<a href="books-detail.php?id=<?php echo $row1['id']; ?>"><img src="<?php  echo $images; ?>" alt="" style="width: 110px;height: 157px;"></a>
										</div>
										<div class="dz-content">
											<a href="books-detail.php?id=<?php echo $row1['id']; ?>" ><h5 class="subtitle"><?php  echo $row1['heading']; ?></h5></a>
											<ul class="dz-tags">
												<li><?php  echo $row1['category']; ?></li>
												
											</ul>
											<div class="price">
												<span class="price-num">&#8377;<?php  echo $row1['price']; ?></span>
												<del>&#8377;<?php  echo $row1['price']; ?></del>
											</div>
											
										</div>
									</div>
								</div>
								<?php  } ?>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Feature Box -->
		
		<!-- Feature Box End -->
		
		
	</div><br><br><br><br>
	<?php
include_once 'inc/connection.php'; // Assuming this file contains your database connection code 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $user_id = $_POST['user'];
    $product_name = $_POST['name'];
    $product_image = $_POST['image'];
    $product_price = $_POST['price'];
    $quantity = $_POST['qut'];
	$tot_price = $_POST['price'] * $_POST['qut'];

    // Insert the product into the database
    $sql = "INSERT INTO cart (user, name, image, price, qut)
            VALUES ('$user_id', '$product_name', '$product_image', '$tot_price', '$quantity')";
	
    if (mysqli_query($conn, $sql)) {
		$message = "Product added to cart!" ;
        echo "<script>alert('$message');</script>";
		echo "<script>window.location.href='books-details.php?id='".$id."'';</script>";
		// echo '<script>location.reload();</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
	
	<?php  include 'inc/footer.php'; ?> 
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<script>
document.getElementById("addToCartButton").addEventListener("click", function() {
    // Check if user is logged in (assuming you have a variable named 'isLoggedIn' available)
    var isLoggedIn = <?php echo isset($_SESSION['user_id']) && $_SESSION['user_id'] != '' ? 'true' : 'false'; ?>;

    if (!isLoggedIn) {
        // User is not logged in, redirect to login page
		alert('Please Continue To Login..!');
        window.location.href = 'shop-login.php'; // Replace 'login.php' with your actual login page URL
    } 
});
</script>
<?php include 'inc/script.php'; ?>
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/books-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:25:18 GMT -->
</html>