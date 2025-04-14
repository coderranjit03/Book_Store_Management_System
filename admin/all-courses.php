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
    <title>USER</title>

    <!--Favicon -->
    <?php
    include "inc/link.php";
    ?>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        @media only screen and (min-device-width: 768px) {
            .col-1 {
                margin-left: 600px;
            }

        }
    </style>
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
                                    <div class="card-title col-2">All Products</div>

                                    <a href="add-courses.php" class="btn btn-primary col-1" style="margin-left: 600px;">Add</a>
                                </div>
                                <?php
                                include "connection.php";
                                $sql = "SELECT courses.id,category.category,courses.c_images,courses.heading,courses.own_name,courses.duration_from,courses.duration_to,courses.validity_certificate,courses.details,courses.price,courses.date,courses.pages,courses.language,courses.year,courses.writen_by,courses.offers FROM `courses` INNER JOIN category ON courses.category=category.id";
                                $result = mysqli_query($conn, $sql) or die("No Result Found.");
                                $counter = 1;
                                ?>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="example2">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">Id</th>
                                                    <th class="wd-15p border-bottom-0">Course Offers</th>
                                                    <th class="wd-15p border-bottom-0">Course Category</th>
                                                    <th class="wd-15p border-bottom-0">Image</th>
                                                    <th class="wd-15p border-bottom-0">Product Name</th>
                                                    <th class="wd-15p border-bottom-0">Owner Name</th>
                                                    <th class="wd-15p border-bottom-0">Product SKU</th>
                                                    <th class="wd-15p border-bottom-0">Price</th>
                                                    <th class="wd-15p border-bottom-0">Writen by</th>
                                                    <th class="wd-15p border-bottom-0">Year</th>
                                                    <th class="wd-15p border-bottom-0">Language</th>
                                                    <th class="wd-15p border-bottom-0">Pages</th>
                                                    <th class="wd-15p border-bottom-0">Details</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $images = 'Images/courses_img/' . $row['c_images'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $counter++; ?></td>
                                                        <td><?php echo $row['offers']; ?></td>
                                                        <td><?php echo $row['category']; ?></td>
                                                        <td><img src="<?php echo $images;  ?>" width="100px" /></td>
                                                        <td><?php echo $row['heading']; ?></td>
                                                        <td><?php echo $row['own_name']; ?></td>
                                                        <td><?php echo $row['validity_certificate'];; ?></td>      
                                                        <td><?php if($row['price']!=''){?>&#8377;<?php }echo $row['price']; ?></td>
                                                        <td><?php echo $row['writen_by']; ?></td> 
                                                        <td><?php echo $row['year'];?></td> 
                                                        <td><?php echo $row['language']; ?></td> 
                                                        <td><?php echo $row['pages']; ?></td> 
                                                        <td><?php echo $row['details']; ?></td>
                                                        <td>
                                                            <a href="update-courses.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                                                            <a href="delete-courses.php?id=<?php echo $row['id'];  ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
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