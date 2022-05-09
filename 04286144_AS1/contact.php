<!-- Contact Page for Users -->

<!DOCTYPE html>
<html> 
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="stylenav.css" />  
       

    <!-- Style for this page -->
 <style>  
  /*Style for this page ***/     
body, html {
    height: 100%;
}

/* The hero image */
.hero-image {

/* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(pics/contact.jpg);

/* Set a specific height */
  height: 50%;

/* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family: Georgia, serif;
} 
</style>   

    
    </head>
 
<?php 
include_once 'header.php';
?>
    
    
<title>Contact Us</title>             
    
<body>
<div class="hero-image">
  <div class="hero-text">    
        
    <h1>(01738) 123456 </h1><br>
       <p>1 High Street <br>
        Edinburgh <br>
           ED1 2PL <br><br><br><br> </p>
   
    </div></div>

  
</body>  
    
<?php 
    include_once 'footer.php';
?>      

</html>