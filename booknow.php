<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Order-Online|The Noshyard</title>
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <link rel="shortcut icon" href="images/01.png" type="image/png" sizes="16x16">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts     -->

    <section class="header" style="width: 100%;  ">
      <div class="logo-div">
        <a href="#" class="logo">
          <img src="images/01.png"  alt="Logo" /></a>
      </div>
      <nav class="navbar">
        <a href="index.php">HOME</a>
        <a href="about.php  ">ABOUT</a>
        <a href="menu.php">MENU</a>
        <a href="franchise.php">FRANCHISE</a>
        <a href="contact.php">CONTACT</a>
        <a href="booknow.php">ORDER ONLINE</a>
        <a href="blogs.php">BLOGS</a>

        <!-- <button class="btn" style="margin-left: 20px;"> Reservation</button> -->
      </nav>
    
     <p  style="color: white; font-size:1.7rem; font-weight:600;  padding:0.5rem 1rem;">
     <?php
     session_start();
       if (isset($_SESSION['loggedin'])) {
        echo $_SESSION['username'];
       }
        ?>
            </p>

            <?php
            if(isset($_SESSION['loggedin'])){
              ?>
              <a class="btn" type="submit" href="userlogout.php" name="logout" style="margin-left:2rem;"> Logout</a>
              <?php
            }
            else{
              ?>
               <a href="userlogin.php" class="btn"  id="loginbtn" >Login</a>
              <?php
            }
            ?>
 
      <div id="menu-btn" class="fas fa-bars"></div>

       
    </section>
    <!-- home section -->
    <section class="home" id="home">

      <div class="swiper home-slider">

        <div class="swiper-wrapper">

          <div class="swiper-slide slide"
            style=" background: url(images/burger\ website\ header.png) no-repeat; background-size:cover;  ">
            <div class="content">

            </div>
          </div>
          <div class="swiper-slide slide"
            style=" background: url(images/nosh\ burger\ header.jpg) no-repeat;background-size:contain; ">
            <div class="content">

            </div>
          </div>
          
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- home section -->
    <div class="e-order" id="e-order">
      <h1 style="text-align:center;">Enjoy Our Meals</h1>
      <div class="order-wrapper">
        <div class="order-content">
          <div class="order-img">
            <img src="images/delevery-food.png" alt="">
          </div>
          <div class="order-details">
            <div class="order-details-wrapper">
              <h1 style="font-weight: bolder; color: red"> Zomato</h1>
              <br>
              <p style="font-weight: bold">
                <i><span style="color: brown;">The Noshyard -</span> <br> "We Serve Happiness" </i>
              </p> <br>
              <a href="https://www.zomato.com/ncr/the-noshyard-south-city-2-gurgaon" target="blank"
                style="background: red; color: white;border:none" class="btn">Order now</a>
            </div>
          </div>
        </div>
        <div class="order-content">
          <div class="order-img">
            <img src="images/delevery-food.png" alt="">
          </div>
          <div class="order-details">
            <div class="order-details-wrapper">
              <h1 style="font-weight: bolder; color: #fc8019">Swiggy</h1><br>
              <p style="font-weight: bold">
                <i><span style="color: brown;">The Noshyard -</span> <br> "We Serve Happiness" </i>
              </p> <br>
              <a href="https://www.swiggy.com/restaurants/the-noshyard-sohna-road-gurgaon-519488" target="blank"
                style="background: #fc8019; color: white;border:none" class="btn">Order now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="footer">

      <div class="icons-container">

          <div class="icons">
              <i class="fas fa-clock"></i>
              <h3>Opening hours</h3>
              <p>10:00am to 10:00pm</p>
          </div>

          <div class="icons">
              <i class="fas fa-phone"></i>
              <h3>phone</h3>
              <p>+91 9875915650</p>
          </div>

          <div class="icons">
              <i class="fas fa-envelope-open"></i>
              <h3>email</h3>
              <p><a style="color:white;" href="mailto: noshyardstores@gmail.com"> noshyardstores@gmail.com</a></p>
          </div>

          <div class="icons">
              <i class="fas fa-map"></i>
              <h3>Office address</h3>
              <!-- <p>Unit No.1132, 11th Floor Building Number B2 </p> -->
              <p>Spaze tech Park, Sector 49, Gurugram (Haryana) 122018.</p>
          </div>

          <div class="icons">
              <i class="fas fa-link"></i>
              <h3>Useful links</h3>
              <ul style="color:white; list-style:none; ">
                  <li class="fas fa-link" style="font-size: 2rem;padding-bottom:1rem; cursor:pointer; "><a href="index.html" style="color: white;">Home</a></li> <br>
                  <li class="fas fa-link" style="font-size: 2rem;padding-bottom:1rem; cursor:pointer; "><a href="about.html" style="color: white;">About Us</a></li> <br>
                  <li class="fas fa-link" style="font-size: 2rem; cursor:pointer; "><a href="contact.html" style="color: white;">Contact Us</a></li>

              </ul>
          </div>

      </div>

      <div class="share">
          <h1 style="text-align: center; color:white;">Follow us:</h1>
          <a href="https://www.facebook.com/noshyardstores/" target="blank" class="fab "><img src="images/facebook.png" alt="" width="100%" height="100%"></a>
          <a href="https://www.instagram.com/noshyardstores/" target="blank" class="fab "><img src="images/instagram.png" alt="" width="100%" height="100%"></a>
          <a href="https://www.linkedin.com/in/nosh-yard-459a441a6/" target="blank" class="fab "><img src="images/linkedin.png" alt="" width="100%" height="100%"></a>
          <a href="https://twitter.com/NoshYard" target="blank" class="fab "><img src="images/twitter.png" alt="" width="100%" height="100%"></a>
      </div>
      <div class="copyright">
          <h2 style="color:white; font-size:2rem;"> Copyright <span style="color: brown;"> &copy; The Noshyard</span></h2>
      </div>
      <a href="https://api.whatsapp.com/send?phone= 919875915650" class="float" target="_blank">
          <!-- <i class="fa fa-whatsapp my-float"></i> --><img src="images/whatsapp.png" alt="">
      </a>
  </section>
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>