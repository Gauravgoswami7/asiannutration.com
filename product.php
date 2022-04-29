<?php
include("header.php");
include("carousel.php")
?>

<div class="order">
    <h1 class="title">our product</h1>

    <div class="order-wrapper">
        <div class="orderdata">
            <img src="img/pre starter.png" alt="">
            <div class="orderdata-wrapper">
                <div>
                <h1>Pre-Starter</h1></div>
                <div>
                <a href="#" class="button" onclick="open1();">place order</a></div>
            </div>
        </div>
        <div class="orderdata">
            <img src="img/startyer (1).png" alt="">
            <div class="orderdata-wrapper">
                <h1>Starter</h1>
                <a href="#" onclick="open1();" class="button">place order</a>
            </div>
        </div>
        <div class="orderdata">
            <img src="img/finisher.png" alt="">
            <div class="orderdata-wrapper">
                <h1>Finisher</h1>
                <a href="#" class="button" onclick="open1();" >place order</a>
            </div>
        </div>
    </div>
</div>

<div class="pop_up" id="pop_up">
<div class="form1" id="form1">
<div class="title">
<h1 class="text">place order </h1><a href="#"  > <i class="fa fa-close " onclick="close1()" style="   cursor:pointer; font-size: 4.5rem; color: black;padding: .5rem;"></i></a> 
</div>
<form class="enquiry-form" action="">
    <input type="text" class="name" placeholder="Enter name" id="name" name="name">
    <input type="text" class="phone" placeholder="Enter Mobile Number" id="phone" name="phone">
    <input type="email" class="email" placeholder="Enter Email" id="email" name="email">

    <input type="text" class="currentbussiness" placeholder="Enter Current Bussiness" id="" name="">
    <input type="text" class="dealership-location" placeholder="Enter office Location" id="" name="">
    <input type="text" class="your adderss" placeholder="Enter your address" id="" name="">
        <select name="cars" id="cars">
    <option >SELECT PRODUCT</option>
    <option >Pre-Starter</option>
    <option >Starter</option>
    <option >Finisher</option>
  </select>
  <input type="number" class="quantity" placeholder="quantity" id="" name="">
    <button type="submit" class="button"onclick="close1()" >Submit</button>
</form>
</div>
</div>
<div class="d-bofin">
    <div class="part1">
        <img src="img/farm-5.jpg"class="animation-element"alt="">
    </div>


<div class="part2">
    <div class="title">
        <h1>About of <span style="color:#ef1927 !important;  border-bottom: 2px solid #fff !important;">D-BOFFIN</span></h1>
    </div>
    <div class="info">
        <p>Our Products are manufactured to strict quality control standards using incoming raw materials to provide an efficient finished product. These are Formulated in accordance with current research into poultry nutrition and mixed using a variety of quality raw products.</p>
    <p>D-boffin is a perfect mix of properly ground grains, nutrients, amino acids, and other vitamins. It helps in the growth of chicken within a balanced diet. Our feed ensures to provide all the required nutrients to the bird.</p>
    </div>
</div>

</div>
<div class="d-bofin">
   


<div class="part2">
    <div class="title">
        <h1>BENEFITS OF <span style="color:#ef1927 !important;  border-bottom: 2px solid #fff !important;">D-BOFFIN</span> </h1>
    </div>
    <div class="info">
        <p></p>
        <ul>
            <li>The product’s high nutritional value helps in improving performance, growth,</li>
            <li>It contains amino acids that help in muscle</li>
     
        <li>It helps in boosting immunity as it contains Vitamin</li>
      
        <li>It helps in increasing the weight and mass of the chicken so as to keep them</li>
        <li>It helps in increasing metabolism and improves the immune</li>
        </ul>
    </div>

</div>
<div class="part1">
        <img src="img/farm-4.jpg" alt="">
    </div>

</div>
<div class="deal" style="background-image:url('img/join.webp');background-repeat:no-repeat; background-size:cover;" >
    <h1>JOIN YOUR BUSINESS WITH US</h1>
    <a href="bussiness.php">JOIN US</a>
</div>
<div class="d-bofin1">
<div class="part2">
    <div class="title">
        <h1>Pre-Starter
 </h1>
    </div>
    <div class="info">
        <p> D-Boffin Pre-stater is special feed to new-born chicks for  the first 5-6 days post-hatch. This mainly contians protein, Fat, carbohydrates, Vitamin, Minerls and Amino Acid specifiction.</p>
        <p>pre-Starter feed benefits & features:</p>
        <ol>
            
            <li> Pro-biotics, Protein And other nutrents help to drive body weight gain. </li>
            <li>D-Boffin Pre-starter feed provides young chicks with all the essential nutrents for immune Systems.</li>
     
        <li>D-boffin Pre-starter feed provides Young chicks with all the essential nutrition are easy for chicks to pick-up and ingest.</li>
        </ol>
        <p>
        Feeding Schedule - Fed from 1st day till 6th day post-hatch.
        </p>
    </div>

</div>
<div class="part1">
        <img src="img/pre starter.png" alt="">
    </div>

</div>
<div class="d-bofin1">
<div class="part1">
        <img src="img/startyer (1).png" alt="">
    </div>
<div class="part2">
    <div class="title">
        <h1>STARTER
 </h1>
    </div>
    <div class="info">
        <p> D-Boffin Starter Is aProtein rich variety of chicken feed. Specially designed to meet the dietry requirements of baby chicks..</p>
        <p>starter Feed Benefits & Features:</p>
        <ol>
            
            <li> It's high protein content (20-24%) helps young chicks grow properly. </li>
            <li>In addition to Protein; Carbohydrates,Fats,Vitamins and Minerals make-up the rest of the cast of nutritions needed by growing baby chickens.</li>
     
        
        </ol>
        <p>
        Feeding Schedule:
        </p>
        <ol>
            
            <li> Fed starter feed for 02-06 weeks. </li>
            <li>freash and Clean water should have available to baby chickens 24x7 Hours.</li>
     
        
        </ol>
    </div>

</div>


</div>
<div class="d-bofin1">
<div class="part2">
    <div class="title">
        <h1>FINISHER
 </h1>
    </div>
    <div class="info">
        <p>Finisher feed is a Complete diet for a chicken between 07-20 weeks age. Commonlly finisher feed containes a protein content that is between 16-18% but has less calcium then regular layer feed.</p>
        <p>starter Feed Benefits & Features:</p>
        <ol>
            
            <li>Finisher feed supports the continuouing growthing fo young chookies. </li>
            <li>A balanced amino amino-acids profile of lysine and methionine for overall growth of structural issues iun the chicken.</li>
            </li>
     
        <li>finisher feed provides a balanced source of omega-3 and 6 fatty acids.</li>
        </ol>
        <p>
        Feeding Schedule:
        </p>
        <ol>
            
            <li> while feeding finisher feed no other grains & supplements are essential.</li>
            <li>supply sufficient fresh water at all the time.</li>
     
        
        </ol>
    </div>

</div>
<div class="part1">
        <img src="img/finisher.png" alt="">
    </div>

</div>
<?php
include("footer.php");
?>
