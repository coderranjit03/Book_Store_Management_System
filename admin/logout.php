<?php
session_start();
if(!isset($_SESSION['admin_is_login'])){
    echo "<script>alert('Logout Sucessfully.');</script>";
    header('location:index.php');
}

unset($_SESSION["admin_is_login"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: index.php");
// echo "<script>window.location.href</script>";


?>