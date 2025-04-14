<?php
session_start();

if(!isset($_SESSION['admin_is_login'])){
    
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
		<title>USER</title>

		<!--Favicon -->
			<?php
  include "inc/link.php";
?>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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

								<!--aside open-->
			<?php
  include "inc/sidebar.php";
?>
				<!--aside closed-->
				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

											<!--app header-->
                      							<?php
  include "inc/header.php";
?>	
					<!--/app header-->

						<!--Page header-->
						
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-12">
							 <?php
              if (isset($_SESSION['status'])) {
                echo $_SESSION['status'];
                unset($_SESSION['status']);
                }
              ?>

								<div class="card">
									<div class="card-header">
										<div class="card-title col-2" >All Register Report</div>

										<!-- <a href="add-customer.php" class="btn btn-primary col-1" style="margin-left: 600px;">Add</a> -->
									</div>
									<?php 

									include "connection.php";

                       		    $sql="SELECT * FROM orders";
                        		$result=mysqli_query($conn, $sql) or die("No Result Found.");
                         		$counter = 1;
									 ?>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example">
												<thead>
													<tr>
                                                        <th class="wd-15p border-bottom-0">Id</th>
														<th class="wd-15p border-bottom-0">Name</th>
                                                        <th class="wd-15p border-bottom-0">Book Name</th>
														<th class="wd-15p border-bottom-0">Book Price</th>
														<th class="wd-15p border-bottom-0">Book Quantity</th>
														<th class="wd-15p border-bottom-0">Contact Number</th>
                                                        <th class="wd-15p border-bottom-0">Email Address</th>
														<th class="wd-15p border-bottom-0">Address</th>
                                                        <th class="wd-15p border-bottom-0">Payment Method</th>
														
														<th class="wd-25p border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php  
												    while ($row = mysqli_fetch_array($result)) {

												   // 	$images='img/highlight_img/'.$row['image'];
												    ?>
													<tr>
														<!-- <td><img src="<?//php echo $images; ?>" width="100px" /></td> -->
                                                    <td><?php echo $counter++; ?></td>
													<td><?php echo $row['fname'].$row['lname']; ?></td>
													<td><?php echo $row['book_name']; ?></td>
													<td><?php echo $row['book_price']; ?></td>	
													<td><?php echo $row['book_qut']; ?></td>
													<td><?php echo $row['phone']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
													<td><?php echo $row['address']; ?></td>
                                                    <td><?php echo $row['payment_method']; ?></td>
													<td>
													<!-- <a href="view-inquiry.php?id=<?//php echo $row['id'];?>" class="btn btn-info">View</a> -->
												
													<a href="delete-orders.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
													</td>
													</tr>
													<?php
												   }
												   ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							
							
							</div>
						</div>
						<!-- /Row -->

				    </div>
		        </div>

            </div>

            			<!--Footer-->
			<?php
  include "inc/footer.php";
?>	
		
			<!-- End Footer-->
        </div>

		<!-- End Page -->
				<!-- Back to top -->
		

		<!-- Jquery js-->
			<?php
  include "inc/script.php";
?>	
    </body>

</html>

