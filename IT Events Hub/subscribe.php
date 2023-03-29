<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "",);

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['email'])) {
    //id
    
  	// Get image name
    $email = mysqli_real_escape_string($db, $_POST['email']);

  	// Get text
    

      // get name
   

    
    

  	// image file directory
  	

  	$sql = "INSERT INTO `de`.`subscribe` (`email`,`dt`) VALUES ('$email', current_timestamp())";
  	// execute query
  	mysqli_query($db, $sql);

  	
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Subscribe: IT Event's Hub</title>
    <link href="subscribe.css" rel="stylesheet" type="text/css" />
    <link rel = "icon" href = "back.png" TYPE = "image/x-icon">
  </head>
  <body>
    <section id="main">
      <nav>
        <a href="index.html" class="logo">
          <img src = "back.png" alt = "IEH">
          </a>

          <span class="menu-space"></span>
  
      </nav>
    </section>
   
<div class="sign-up-container">
  <div class="envelope">
    <div class="paper">
      <h1>Subscribe our Newsletter</h1>
    
       
      <form class="sign-up-form" action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="Email" class="text-input" required/>
        <button type="submit" name="button" class="button"> Subscribe </button>
      </form>
    </div>
    <div class="bottom-flap"></div>
  </div>


  </body>
</html>