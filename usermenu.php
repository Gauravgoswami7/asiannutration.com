<?php
include 'userconfig.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Noshyard</title>
  <meta name="description" content="Welcome to  The Noshyard. You are On the Most Emerging Restaurant Franchise Chain In India." />
  <meta name="keyword" content="" />
  <link rel="shortcut icon" href="images/01.png" type="image/png" sizes="16x16" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/style-2.css" type="text/css">
  <link rel="stylesheet" href="css/user.css" type="text/css">

</head>

<body>
  <!-- header section starts     -->
  <div style="background: #f2ebe9;">
    <section class="header" style="width: 100%;  ">
      <div class="logo-div">
        <a href="#" class="logo">
          <img src="images/01.png"  alt="" /></a>
      </div>
      <nav class="navbar">
        <a href="index.html">HOME</a>
        <a href="about.html">ABOUT</a>
        <a href="menu.html">MENU</a>
        <a href="franchise.html">FRANCHISE</a>
        <a href="contact.html">CONTACT</a>
        <a href="booknow.html">ORDER ONLINE</a>
        <a href="userlogin.php">BLOGS</a>

        <!-- <button class="btn" style="margin-left: 20px;"> Reservation</button> -->
      </nav>

    
      <a href="blogs.html" style="color: white; font-size:2.1rem; font-weight:600;"><?php 
  // if (isset($_SESSION['username'])) {
  //   echo $_SESSION['username'];
  // }
?></a>
      <div id="menu-btn" class="fas fa-bars"></div>

       
    </section>