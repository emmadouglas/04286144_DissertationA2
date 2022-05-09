<!-- Footer Page for website -->

<?php
// session_start();
//?>

<!DOCTYPE html>
<html> 

<head>


<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="stylenav.css" />

</head>
    
<!-- Navigation -->

 <nav class="navbar">
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="index.php">Home</a></li>
     
 <!-- DROPDOWN MENU --> <!-- Commented out due to issues with SQL -->
 <!--  <li><a href="login.php">Profile</a>  </li>   
<ul class="dropdown">
    
 <li class="services">
     //<?php
    // if (isset($_SESSION["useruid"])) {
    //     echo "<li><a href="profile.php">Profile </a></li>";
      //   echo "<li><a href="includes/logout.inc.php">Log Out</a></li>";
    // }
     //else {
    //    echo "<li><a href="register.php">Register</a></li>";
    //    echo "<li><a href="login.php">Log In</a></li>";
   //  }
    ?>

 </ul>
   -->
 <li><a href="login.php">log In</a></li> 
 <li><a href="registration.php"> Register </a></li>    
 <li><a href="rolemodels.php">Role Models</a></li>
 <li><a href="community.php">Community</a></li>
 <li><a href="companies.php">Companies</a></li>
 <li><a href="education.php">Education</a></li>
 <li><a href="tips.php">Tips and Tricks</a></li>
 </div>
 </ul>
 </nav>