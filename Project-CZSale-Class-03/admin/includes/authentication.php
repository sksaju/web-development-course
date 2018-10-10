<?php
    session_start();
    //echo $_SESSION["auth_id"];

    if($_SESSION["auth_id"] == Null) {
        //redirecting to the login page
        header("Location:index.php");
    }

?>