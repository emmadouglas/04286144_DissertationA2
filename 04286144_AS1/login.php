<!-- Login Page for Users -->


<?php 
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<html lang="en">

     
<body>
    
<?php
   require('db.php');
   session_start();
 // When form submitted, check and create user session.
   if (isset($_POST['username'])) {
       $username = stripslashes($_REQUEST['username']); // removes backslashes
       $username = mysqli_real_escape_string($con, $username);
       $password = stripslashes($_REQUEST['password']);
       $password = mysqli_real_escape_string($con, $password);
 // Check user is exist in the database
       $query    = "SELECT * FROM `userstest` WHERE username='$username'
                    AND password='" . md5($password) . "'";
       $result = mysqli_query($con, $query) or die(mysql_error());
       $rows = mysqli_num_rows($result);
       if ($rows == 1) {
           $_SESSION['username'] = $username;
// Redirect to user dashboard page
           header("Location: dashboard.php");
       } else {
           echo "<div class='form'>
                 <h3>Incorrect Username/password.</h3><br/>
                 <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                 </div>";
       }
   } else {
?>
   
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1><br>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br>
        <input type="submit" value="Login" name="submit" class="login-button"/><br>
        
  </form> 
?>
</body>
</html>


    <!-- Cancelled out due to error in SQL -->

<?php 
 //if (isset($_GET["error"])) {
 //if (isset($_GET["error"] == "emptyinput"){
  //    echo "<p>Please Fill in all Fields</p>";
         
 //   }
 //     else if ($_GET["error"] == "wronglogin") {
 //          echo "<p>Incorrent login Information</p>";
  //      }
         
 //    }
                     
?>

<br><br>

<p><b><a class="one" href="registration.php" target="_blank">Hey! You're new? Click Here</a></b></p>

<br><br><br>

<?php 
    include_once 'footer.php';
?>      
</html>