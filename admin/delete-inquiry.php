<?php
$id=$_GET['id'];
include "connection.php";
$sql="DELETE FROM contact WHERE id='$id'";
$result=mysqli_query($conn,$sql) or die ("Query Unsucessfull");
//  header("location:all-business-d-ads.php");
 echo "<script>window.location='all-inquiry.php'; </script>";
 mysqli_close($conn);
?>