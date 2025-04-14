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
    <title>Inquiry</title>

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
                    <link href="assets/css/summenote.css" rel="stylesheet" />
                    <!--/app header-->

                    <!--Page header-->

                    <!--End Page header-->
                    <!-- insert code php -->
                    <?php
                    include 'connection.php';

                    $msg = "";
                    if (isset($_POST['submit'])) {
                        $sid = $_POST['sid'];
                        $filename =  uniqid() . $_FILES["image"]["name"];
                        $filesize = $_FILES["image"]["size"];
                        $tempname = $_FILES["image"]["tmp_name"];
                        $filetype = $_FILES["image"]["type"];

                        $old_image = $_POST['old_image'];
                        if ($_FILES["image"]["name"] != '') {
                            $upload_image = $filename;
                            unlink("Images/slider_img/" . $old_image);
                        } else {
                            $upload_image = $old_image;
                        }

                        if (move_uploaded_file($tempname, "Images/slider_img/" . $filename)) {
                            $msg = "Image uploaded successfully";
                        } else {
                            $msg = "Failed to upload image";
                        }
                        // $p_name = $_POST['p_name'];
                        // $p_price = $_POST['p_price'];
                        // $p_desc = $_POST['p_desc'];
                        // $p_size = $_POST['p_size'];
                        // $create_date = date("Y/m/d");

                        $sql = "UPDATE `slider` SET `s_image`='$upload_image' WHERE id='$sid';";
                        if (mysqli_query($conn, $sql)) {
                            $_SESSION['status'] = "<div id='myElem' class='alert alert-success' role='alert' style='font-family: 'Nunito Sans', sans-serif; font-size: 12px;'>
                   Data Added successfully.</i>
            </div>";

                            echo "<script> window.location = 'all-slider.php';</script>";
                        } else {
                            $_SESSION['status'] = "<div id='myElem' class='alert alert-danger' role='alert' style='font-family: 'Nunito Sans', sans-serif; font-size: 12px;'>
                   Failed.</i>
            </div>";
                            echo "<script> window.location = 'all-slider.php';</script>";
                        }
                    }
                    ?>

                    <!-- insert code end -->
                    <!-- Row -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Update Slider</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" class="card" enctype="multipart/form-data">
                                    <?php
                                    include "connection.php";
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM slider WHERE id=$id";
                                    $result = mysqli_query($conn, $query) or die("No Result Found.");
                                    $counter = 0;
                                    if ($result) {
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                            <div class=" card-body">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12">
                                                        <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" />
                                                        <input type="hidden" name="old_image" value="<?php echo $row['s_image']; ?>" />
                                                        <img src="Images/slider_img/<?php echo $row['s_image']; ?>" style="width: 100px;">
                                                        <br><br>
                                                        <input type="file" class="dropify" name="image" data-height="180" />
                                                        <p>Only jpg,jpeg,png and gif file with maximum size of 366x252 is allowed.</p>
                                                    </div>
                                                  
                                                    <br>
                                                </div>
                                                <br>
                                                <button onclick="window.location = 'all-slider.php';" type="button" class="btn btn-primary" name="">Back</button>
                                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                            </div>
                                    <?php }
                                    } ?>
                                </form>

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
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script type="text/javascript">
        $("#myElem").show().delay(3400).fadeOut();
    </script>
    <script>
        $('#summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        $(function() {
            var dateFormat = "dd/mm/yy",
                from = $("#from")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat: "dd/mm/yy",
                })
                .on("change", function() {
                    to.datepicker("option", "minDate", getDate(this));
                }),
                to = $("#to").datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat: "dd/mm/yy",
                })
                .on("change", function() {
                    from.datepicker("option", "maxDate", getDate(this));
                });

            function getDate(element) {
                var date;
                try {
                    date = $.datepicker.parseDate(dateFormat, element.value);
                } catch (error) {
                    date = null;
                }

                return date;
            }
        });
    </script>
</body>

</html>