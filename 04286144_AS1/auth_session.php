<!-- Start the session for the user -->

<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
