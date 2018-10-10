<?php 
    require_once('includes/authentication.php');
    $_SESSION["auth_id"] = Null;
    //redirecting to the login page
    header("Location:index.php");
?>
