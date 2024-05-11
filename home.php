<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
	      <div id="search-btn" class="fas fa-search"></div>
         <div id ="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
 	   <a href="home.php" class="logo">Cs.Basics</a>
      </div>
 
     
      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php if(isset($_SESSION['user_id'])){ echo "Welcome, ".$_SESSION['fname']; }?></h3>
         <p class="role">Student</p>
         <?php if(isset($_SESSION['user_id'])){ ?>
         <a href="profile.html" class="btn">view profile</a>
         <?php } ?>
         <div class="flex-btn">
            <?php if(!isset($_SESSION['user_id'])){ ?>
            <a href="login.php?action=login" class="option-btn">Login</a>
            <a href="login.php?action=register" class="option-btn">Register</a>
            <?php }else{ ?>
               <a href="logout.php" class="option-btn">Logout</a>
            <?php } ?>
         </div>

            </div>
   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

  <div class="profile">
    <img src="images/pic-1.jpg" class="image" alt="">
    <h3 class="name"><?php if(isset($_SESSION['user_id'])){ echo "Welcome, ".$_SESSION['fname']; }?></h3>
      <p class="role">Student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="glossary.html"><i class="fas fa-language"></i><span>Computer Glossary</span></a>
     <a href=" pdfnotes.html"><i class="fas fa-book"></i><span>Pdf notes</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">Languages</h3>
         <p class="likes"> Total Language :<span>6</span></p>
         <a href="#" class="inline-btn">Let's learn</a>
         <p class="likes">Pdf Notes : <span>60</span></p>
         <a href="courses.html" class="inline-btn">view Pdf</a>
      </div>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="devlopment.html"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
            <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
            <a href="#"><i class="fas fa-music"></i><span>music</span></a>
            <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>C</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>C++</span></a>
            <a href="#"><i class="fab fa-js"></i><span>java</span></a>
            <a href="#"><i class="fab fa-react"></i><span>oracle</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>networking</span></a>
         </div>
      </div>
   </div>

</section>

   </div>

</section>

<footer class="footer">

&copy; Copyright @ 2023 by <span>Cs.Basics</span> | All Rights Reserved!
</footer>

<script src="js/script.js"></script>
   
</body>
</html>