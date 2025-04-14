<?php
$id=$_GET['id'];
include "connection.php";
$sql="DELETE FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql) or die ("Query Unsucessfull");
//  header("location:all-business-d-ads.php");
 echo "<script>window.location='all-register.php'; </script>";
 mysqli_close($conn);
?>