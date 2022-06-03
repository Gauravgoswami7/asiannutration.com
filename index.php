<?php include 'userconfig.php' ?>
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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/style-2.css" type="text/css">
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
        <a href="index.php">HOME</a>
        <a href="about.html">ABOUT</a>
        <a href="menu.html">MENU</a>
        <a href="franchise.html">FRANCHISE</a>
        <a href="contact.html">CONTACT</a>
        <a href="booknow.html">ORDER ONLINE</a>
        <a href="userlogin.php">BLOGS</a>

        <!-- <button class="btn" style="margin-left: 20px;"> Reservation</button> -->
      </nav>
    
     <p  style="color: white; font-size:1.7rem; font-weight:600;  padding:0.5rem 1rem;">
     <?php
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
    

    <!-- home section starts  -->
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
          <div class="swiper-slide slide"
            style=" background: url(images/Header\ 4.png) no-repeat;background-size:contain; ">
            <div class="content">

            </div>
          </div>
          
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- home section end -->

    <div class="food-preview" style="padding-top: 2rem; ">
      <div class="swiper mySwiper1">
        <h1 style="
            color: black;
            text-align:center;
            padding:1rem;
            border-radius: 1rem;
            font-size:5rem !important;
            font-family: 'Tapestry', 'cursive';
          ">
          Special Foods
        </h1>
        <div class="swiper-wrapper" style="
            cursor: grab;
            transform: translate3d(0px, 0px, 0px);
            transition-duration: 0ms;
            margin-top: 3rem;
            margin-bottom: 5rem;
          ">
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-5">
              <div class="menu-img"><img src="images/soya chaap burger1.png" alt="soya chap burger" /></div>
              <div class="container-menu">
                <h3>Soya Chaap Burger</h3>
                <!-- <div class="price"><h4>129/- <span style="text-decoration: line-through; color:black;font-size:1.8rem;" >161/- </span>  <span style="font-size:1.5rem;color:green;">-25% Off</<span> </h4> <br>
             
              </div>            -->
                <!-- <a class="btn1" href="booknow.html">buy now</a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-5">
              <div class="menu-img">
                <img src="images/Tangy Paneer Burger.png" alt=" tangy chicken burger" />
              </div>
              <div class="container-menu">
                <h3>Tangy Paneer Burger</h3>
                <!-- <div class="price"><h4>129/- <span style="text-decoration: line-through; color:black;font-size:1.8rem;" >161/- </span>  <span style="font-size:1.5rem;color:green;">-25% Off</<span> </h4> <br>
              </div>                     -->
                <!-- <a class="btn1" href="booknow.html">buy now</a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">

            <div class="menu-item" data-name="food-4">
              <div class="menu-img">
                <img src="images/BBQ Burger.png" alt="bbq burger" />
              </div>
              <div class="container-menu">
                <h3>BBQ Burger</h3>
                <!-- <div class="price"><h4>149/- <span style="text-decoration: line-through; color:black;font-size:1.8rem;" >186/- </span>  <span style="font-size:1.5rem;color:green;">-25% Off</<span> </h4> <br>
              </div>  -->
                <!-- <a class="btn1" href="booknow.html">buy now</a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-1">
              <div class="menu-img">
                <img src="images/Veg Cutlet Burger.png" alt="veg cutlet burger" />
              </div>
              <div class="container-menu">
                <h3>Veg Cutlet Burger </h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-2">
              <div class="menu-img">
                <img src="images/grilled chicken.png" alt=" grilled chicken" />
              </div>
              <div class="container-menu">
                <h3>Grilled Chicken</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-4">
              <div class="menu-img">
                <img src="images/tangy paneer.png" alt=" tangy panner"/>
              </div>
              <div class="container-menu">
                <h3>Tangy Paneer</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="menu-item" data-name="food-1">
              <div class="menu-img">
                <img src="images/tangy chicken.png" alt=" tangy chicken" />
              </div>
              <div class="container-menu">
                <h3>Tangy Chicken</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- <div style="padding: 2rem;" class="swiper-pagination"></div> -->
      </div>
      <div class="see-all" style=" padding:2rem; text-align:center;">
        <a href="menu.html" class="btn1"
          style="padding: 1rem;  font-size:1.5rem; background:white; border-radius:5px;font-weight:bolder;color:black; cursor:pointer">Explore
          more /></a>
      </div>
    </div>
    <!-- <div class="nosh-burger" style="width: 100vw; height:35vh;">
      <img src="images/nosh burger header.jpg"  width="100%" height="100%" alt="">
    </div> -->
    <!-- food section end -->
    <!-- <section class="disc-coupon" >
    <div class="discount-wrapper" style="width: 70%; margin:0px auto;position:relative; ">
      <img src="images/page-0001.jpg" alt="" width="100%" height="100%">
      <button class="btn redeem-btn"
        style="text-align: center;background:#b09165;color:black;font-weight:bold;  box-shadow: 0 0 10px white;"
        onclick="showredeem()">Redeem Now</button>
    </div>
  </section> -->
  <!-- <div style="width: 100vw; height:30vh;">
    <img src="images/nosh burger header.jpg"  width="100%" height="100%" alt="">
  </div> -->

    <div class="redeem-code" id="redeem-code">
      <div class="delete" onclick="cancel()"><img src="images/delete-button.png" alt=""></div>
      <h1 style="color:white;padding:2rem;">Welcome to Noshyard</h1>
      <input type="text" class="coupon-code " value="" id="coupon-code" placeholder="Enter Coupon Code">
      <button class="btn btn-primary" onclick="redeembutton()" style="background: blue;">
        Go
      </button>
    </div>
    <div class="home-intro" style="width: 90vw;  margin:0px auto;border-radius:10px;overflow:hidden;">
      <div class="vertical">
        <div class="swiper mySwiper2" >
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/Website Header1.png" width="100%" height="100%" alt=" website header"></div>
            <div class="swiper-slide"><img src="images/Nosh website Header 3.jpg" width="100%" height="100%" alt=" website header"></div>
            <div class="swiper-slide"><img src="images/Website Header1.png" width="100%" height="100%" alt="website header"></div>
            <div class="swiper-slide"><img src="images/Nosh website Header 3.jpg" width="100%" height="100%" alt=" website header"></div>
            <div class="swiper-slide"><img src="images/Website Header1.png" width="100%" height="100%" alt="website header"></div>
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
      <div class="vertical-1" >
       <div class="vertical-details" style="width: 90%; height:100%; background:url('images/text-bg.jpg') no-repeat;background-size:cover;">
       <h1 style="text-align: center; padding:2rem;">Eat <span style="color:brown">Fresh</span></h1>
       <div class="ver-icon" >
         <div class="ver-icon-wrapper"> <img src="images/food-tray (1).png"   alt="food-tray">
         </div>
         <div class="ver-icon-wrapper"> <img src="images/dinner.png"  alt="dinner">
        </div>
        <div class="ver-icon-wrapper"> <img src="images/fast-food.png" alt="fast-food">
        </div>
       </div>
       <p >We believe in <span style="color: black; font-weight:bolder;">"Eat-Fresh"</span> and when it comes to keeping it real, we are totally hip with it. Almost everything we serve you is prepared in-house with the freshest of carefully chosen ingredients. <br> <br> Yeah, everything is prepared just about right then. That's the level of commitment we promise towards serving you totally tasty n' fresh food every single day.
        <br> <br> And yes, even the dips, sauces and condiments like ketchup and the famed mustard sauce to zing up your every bite, is prepared freshly in-house. Dank freshness that tastes totally.</p>
       </div>
      </div>
      
    </div>
    <!-- home section ends -->
    <div class="events">
      <div class="events-wrapper">
        <h1 class="events-poster"
          style="text-align: center; font-size:3.5rem; font-weight:bold;font-family:campus;padding:1rem; "> Feed Food
          Feel Good</h1>
        <img class="events-content" width="100%" height="100%" src="images/donate feed for hungry animals.png"  alt=" feed food" />
      </div>
    </div>

    <section class="menu-preview">
      <h1 style="text-align: center;padding:2rem;color:white;">Menu-preview</h1>
      <div class="pre-menu-wrapper">
        <div class="pre-menu-item">
          <div class="pre-menu-img" style="width:38%; height:100%">
            <img src="images/Tangy Paneer Burger.png" alt="tangy paneer burger" width="100%" height="100%">
          </div>
          <div class="pre-menu-container">
            <h3 style="font-size: 2rem; font-weight: bolder;">Tangy Chicken Burger</h3>
            <h2> (fat-free)</h2>
            <div class="price">
              <h4 style="font-size:2rem;">199/- <span
                  style="text-decoration: line-through; color:grey;font-size:1.8rem;">249/- </span> <span
                  style="font-size:1.5rem;color:green;">-25% Off</<span>
              </h4> <br>
            </div>
            <a class="btn1" href="booknow.html">buy now</a>
          </div>
        </div>
        <div class="pre-menu-item">
          <div class="pre-menu-img" style="width:38%; height:100%">
            <img src="images/Veg Cutlet Burger.png" alt=" Veg cutlet burger" width="100%" height="100%">
          </div>
          <div class="pre-menu-container">
            <h3 style="font-size: 2rem; font-weight: bolder;">Veg Cutlet Burger</h3>
            <h2> (fat-free)</h2>
            <div class="price">
              <h4 style="font-size:2rem;">199/- <span
                  style="text-decoration: line-through; color:grey;font-size:1.8rem;">249/- </span> <span
                  style="font-size:1.5rem;color:green;">-25% Off</<span>
              </h4> <br>
            </div>
            <a class="btn1" href="booknow.html">buy now</a>
          </div>
        </div>
        <div class="pre-menu-item">
          <div class="pre-menu-img" style="width:38%; height:100%">
            <img src="images/BBQ Burger.png" alt=" bbq burger" width="100%" height="100%">
          </div>
          <div class="pre-menu-container">
            <h3 style="font-size: 2rem; font-weight: bolder;">Tangy Paneer Burger</h3>
            <h2> (fat-free)</h2>
            <div class="price">
              <h4 style="font-size:2rem;">199/- <span
                  style="text-decoration: line-through; color:grey;font-size:1.8rem;">249/- </span> <span
                  style="font-size:1.5rem;color:green;">-25% Off</<span>
              </h4> <br>
            </div>
            <a class="btn1" href="booknow.html">buy now</a>
          </div>
        </div>
      </div>
      <div class="see-all" style=" padding:4rem; text-align:center;">
        <a href="menu.html" class="btn1"
          style="padding: 1rem;  font-size:1.5rem; background:black; border-radius:5px;font-weight:bolder;color:white; cursor:pointer">Explore
          more /></a>
      </div>
    </section>
    <!-- blogs section starts  -->
    

    <div class="e-order" id="e-order">
      <h1 style="text-align:center;">Enjoy Our Meals  </h1>
      <div class="order-wrapper">
        <div class="order-content">
          <div class="order-img">
            <img src="images/delevery-food.png" alt="food delivery">
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
            <img src="images/delevery-food.png" alt="food delivery">
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
   

    <!-- footer section starts  -->

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
          <p>
            <a style="color: white" href="mailto: noshyardstores@gmail.com">
              noshyardstores@gmail.com</a>
          </p>
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
          <ul style="color: white; list-style: none">
            <li class="fas fa-link" style="font-size: 2rem; padding-bottom: 1rem; cursor: pointer">
              <a href="index.html" style="color: white">Home</a>
            </li>
            <br />
            <li class="fas fa-link" style="font-size: 2rem; padding-bottom: 1rem; cursor: pointer">
              <a href="about.html" style="color: white">About Us</a>
            </li>
            <br />
            <li class="fas fa-link" style="font-size: 2rem; cursor: pointer">
              <a href="contact.html" style="color: white">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="share">
        <h1 style="text-align: center; color: white">Follow us:</h1>
        <a href="https://www.facebook.com/noshyardstores/" target="blank" class="fab"><img src="images/facebook.png"
            alt="" width="100%" height="100%" /></a>
        <a href="https://www.instagram.com/noshyardstores/" target="blank" class="fab"><img src="images/instagram.png"
            alt="" width="100%" height="100%" /></a>
        <a href="https://www.linkedin.com/in/nosh-yard-459a441a6/" target="blank" class="fab"><img
            src="images/linkedin.png" alt="" width="100%" height="100%" /></a>
        <a href="https://twitter.com/NoshYard" target="blank" class="fab"><img src="images/twitter.png" alt=""
            width="100%" height="100%" /></a>
      </div>
      <div class="copyright">
        <h2 style="color: white; font-size: 2rem">
          Copyright <span style="color: brown"> &copy; The Noshyard</span>
        </h2>
      </div>
      <a href="https://api.whatsapp.com/send?phone= 919875915650" class="float" target="_blank">
        <!-- <i class="fa fa-whatsapp my-float"></i> --><img src="images/whatsapp.png" alt="" />
      </a>
    </section>
  </div>


  <!-- footer section ends  -->
  <!-- !-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
      },
    });
    var swiper = new Swiper(".mySwiper1", {
      slidesPerView: 3,
      grabCursor: true,
      spaceBetween: 50,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        // when window width is >= 320px

        320: {
          slidesPerView: 2,

          spaceBetween: 10,
        },

        // when window width is >= 480px

        480: {
          slidesPerView: 2,

          spaceBetween: 30,
        },
        // when window width is >= 640px

        616: {
          slidesPerView: 2,

          spaceBetween: 30,
        },
        768: {
          slidesPerView: 3,

          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 5,

          spaceBetween: 30,
        },
      },
    });

 
  </script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <script>
    lightGallery(document.querySelector(".gallery .gallery-container"));
    function cancel() {
      document.getElementById("redeem-code").style.display = "none";
      document.getElementById('coupon-code').innerHTML = "";
    }
    function showredeem() {
      document.getElementById("redeem-code").style.display = "block";
    }
    function redeembutton() {
      let input1 = document.getElementById('coupon-code').value;
      let coupon = ['NOSH001', 'NOSH002', 'NOSH003', 'NOSH004', 'NOSH005', 'NOSH006', 'NOSH007', 'NOSH008', 'NOSH009', 'NOSH010', 'NOSH011', 'NOSH012', 'NOSH013', 'NOSH014', 'NOSH015', 'NOSH016', 'NOSH017', 'NOSH018', 'NOSH019', 'NOSH020', 'NOSH021', 'NOSH022', 'NOSH023', 'NOSH024', 'NOSH025', 'NOSH026', 'NOSH027', 'NOSH028', 'NOSH029', 'NOSH030', 'NOSH031', 'NOSH032', 'NOSH033', 'NOSH014', 'NOSH015', 'NOSH016', 'NOSH017', 'NOSH018', 'NOSH019', 'NOSH020'];
      for (let i = 0; i <= coupon.length; i++) {
        if (input1 == coupon[i]) {
          alert("Congratulation!");
          break;
        }

      }
    }
  </script>
</body>

</html>