<!-- Log out function page for Users -->

<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
