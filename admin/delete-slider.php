<?php
$id = $_GET['id'];
include "connection.php";
$sql = "DELETE FROM slider WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die("Query Unsucessfull");
//  header("location:all-business-d-ads.php");
echo "<script>window.location='all-slider.php'; </script>";
mysqli_close($conn);
