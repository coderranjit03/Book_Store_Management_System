<?php
$id=$_GET['id'];
include "inc/connection.php";
$sql="DELETE FROM cart WHERE id='$id'";
$result=mysqli_query($conn,$sql) or die ("Query Unsucessfull");
//  header("location:all-business-d-ads.php");
 echo "<script>window.location='shop-cart.php'; </script>";
 mysqli_close($conn);
?>