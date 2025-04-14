<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>

<script>
    // Redirect to the desired page after logout using JavaScript
    window.location.href = "index.php";
</script>
