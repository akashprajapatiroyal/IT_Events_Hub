<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "",);

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['name'])) {
    //id
    $name = mysqli_real_escape_string($db, $_POST['name']);
  	// Get image name
    $email = mysqli_real_escape_string($db, $_POST['email']);

  	// Get text
    $tel = mysqli_real_escape_string($db, $_POST['tel']);

      // get name
    $text = mysqli_real_escape_string($db, $_POST['text']);

    
    

  	// image file directory
  	

  	$sql = "INSERT INTO `de`.`feedback` (`name`, `email`, `tel`, `text`, `dt`) VALUES ('$name', '$email', '$tel', '$text', current_timestamp())";
  	// execute query
  	mysqli_query($db, $sql);

  	
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Feedback: IT Event's Hub</title>
    <link href="css/feedback.css" rel="stylesheet" type="text/css" />
    <link rel = "icon" href = "images/THE_EVENT'S_HUB_LOGO.jpg" TYPE = "image/x-icon">
  </head>
  <body>
    <section id="main">
      <nav>
        <a href="about_us.html" class="logo">
          <img src = "images/THE_EVENT'S_HUB_LOGO.jpg" alt = "Logo of The Event's Hub">
          </a>

          <span class="menu-space"></span>

          <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="workshop.html">Workshops/ Seminar</a></li>
            <li><a href="internships.html">Internships</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="feedback.php">Feedback</a></li>
          </ul>
          
      </nav>
    </section>

    <div class="Content">
      <div class="image">
        <img src="images/THE_EVENT'S_HUB_LOGO.jpg" alt="IEH">
      </div>
      <div class="main-text">
        <h4> You can share your feedback here-</h4>
       
        <form action="feedback.php" method="post"> 
        <div class="form">
          <input type="text" name="name" id="name" placeholder="Name" required></input> 
          <input type="email" name="email" id="email" placeholder="Email" required></input> 
          <input type="tel" name="tel" id="tel" placeholder="Mobile Number"required></input> 
          <textarea name="text" id="text" placeholder="Write your feedback here"required ></textarea>
          <button class = "button submit">Submit</button>
        </div>
        </form>
      </div>
    </div>

  </body>
</html>


