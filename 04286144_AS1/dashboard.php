<!-- Test Dashboard used to show a user has succussfully been registered or logged in -->

<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
    
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
    
    
</html>
