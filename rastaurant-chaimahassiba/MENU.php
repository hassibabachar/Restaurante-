<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--  Main Template Css File  -->
      <link rel="stylesheet" href="css/MENU.css">
      <!--  Render All Elements Normally  -->
      <link rel="stylesheet" href="css/normalize.css">
      <!--  Font Awesome Library  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--  Google Fonts  -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
      rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <style> @import url('https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap'); </style>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">
      <title>MENU</title>
</head>

<?php 
require('conponent/header.php');
?>

<!--  start landing page  -->
<section class="landing">
  <div class="container">
    <div class="food">
      <ul class="sub-list">
          <li id="sub-list-1"> 
            <img src="images/burger1.png" alt="">
            <h1> Fast Food</h1>
            <ul class="sub-list-1">
                <li><a href="#pizza">Pizza  </a></li>
                <li><a href="#burger">Burger</a></li>
                <li><a href="#sandwich">Sandwich</a></li>
            </ul>
            </li>
            <li id="sub-list-2">
              <img id="imge" src="images/orange-juice.png" alt=""> 
              <h1> Drink</h1>
              <ul class="sub-list-2">
                  <li><a href="#natural">natural juice  </a></li>
                  <li><a href="#soda">soda</a></li>
              </ul>
            </li>
      </ul>
    </div>
  </div>
</section>
<!-- start food page -->
<div class="food-2">
  <div class="container">
    <div class="title-1"id="pizza">
    <img src="images/border2.png" alt="">
    <h1>pizza</h1> 
    </div>
    <div class="pizza" >
    <div class="box">
    <img src="images/pizza/Spicy-Chicken-Ranch_dip-removebg-preview.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>pizza Spicy chiken ranch</h2>
    <h2 class="price"> 7$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/pizza/chicken-shawarma_dip-removebg-preview.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>pizza chiken Shawarma</h2>
    <h2 class="price"> 8$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/pizza/SHRIMP-LOVERS_dip-removebg-preview.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>pizza 4 seasons</h2>
    <h2 class="price"> 10$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    </div>
    <div class="title-1"id="burger">
    <img src="images/border2.png" alt="">
    <h1>Burger</h1> 
    </div>
    <div class="burger" >
    <div class="box">
    <img src="images/burger/double_cheese_burger_chicken_street_300x300.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>double cheese burger chicken street</h2>
    <h2 class="price"> 5$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/burger/twice_burger_chicken_street_300x300.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>Twice burger chicken street</h2>
    <h2 class="price"> 5$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/burger/tower_burger_chicken_street_300x300.png" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>Tour burger chiken street </h2>
    <h2 class="price"> 5$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    </div>
    <div class="title-1" id="sandwich">
    <img src="images/border2.png" alt="">
    <h1>Sandwich</h1> 
    </div>
    <div class="Sandwich">
    <div class="box">
    <img src="images/sandwich/wag5-hero.jpg" alt="" >
    <div class="details">
    <div class="details-sub">
    <h2>Sandwich chicken</h2>
    <h2 class="price"> 6$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/sandwich/J380_Kiosk_600x600px_Sandwich_Grilled_Chicken_Bacon_single-min-min-e1664365805975.jpg" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>Sandwich meat</h2>
    <h2 class="price"> 8$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    <div class="box">
    <img src="images/sandwich/ratio3x2_1800.jpg" alt="">
    <div class="details">
    <div class="details-sub">
    <h2>Sandwich chawarma </h2>
    <h2 class="price"> 7$</h2>
    </div>
    <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
    <button > <a href="order-now.php">order now</a></button>
    </div>
    </div>
    </div>
    <div class="drinks" id="drink">
      <div class="title-1" id="natural">
      <img src="images/border2.png" alt="">
      <h1>Natural juice</h1> 
      </div>
      <div class="natural-juice">
      <div class="box">
      <img src="images/juice/Fresh Kiwi.jpg" alt="">
      <div class="details">
      <div class="details-sub">
        <h2>Fresh kiwi</h2>
        <h2 class="price"> 3$</h2>
      </div>
        <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
        <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      <div class="box">
      <img src="images/juice/Fresh lemon with mint.jpg" alt="">
      <div class="details">
      <div class="details-sub">
      <h2>Fresh lemon with mint</h2>
      <h2 class="price"> 3$</h2>
      </div>
      <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
      <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      <div class="box">
      <img src="images/juice/Fresh Lemon.jpg" alt="">
      <div class="details">
      <div class="details-sub">
      <h2>Fresh Lemon</h2>
      <h2 class="price"> 3$</h2>
      </div>
      <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
      <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      <div class="box">
      <img src="images/juice/Fresh Orange.jpg" alt="">
      <div class="details">
      <div class="details-sub">
      <h2>Fresh Orange</h2>
      <h2 class="price"> 2$</h2>
      </div>
      <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
      <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      <div class="box">
      <img src="images/juice/Fresh Strawberry.jpg" alt="">
      <div class="details">
      <div class="details-sub">
      <h2>Fresh Strawberry</h2>
      <h2 class="price"> 3$</h2>
      </div>
      <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
      <button > <a href="order-now.php">order now</a></button>
      </div>  
      </div>
      <div class="box">
      <img src="images/juice/Nestle Sparkling Water.jpg" alt="">
      <div class="details">
      <div class="details-sub">
      <h2> Water</h2>
      <h2 class="price"> 1$</h2>
      </div>
      <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
      <button > <a href="order-now.php">order now</a></button>
      </div>  
      </div>
      </div>
      <div class="title-1" id="soda">
      <img src="images/border2.png" alt="">
      <h1>Soda</h1> 
      </div>
      <div class="soda" >
      <div class="box">
      <img src="images/juice/Schweppes.jpg" alt="">
      <div class="details">
      <div class="details-sub">
        <h2>Schweppes</h2>
        <h2 class="price"> 1$</h2>
      </div>
        <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
        <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      <div class="box">
      <img src="images/juice/Cola.jpg" alt="">
      <div class="details">
      <div class="details-sub">
        <h2>Cola</h2>
        <h2 class="price"> 1$</h2>
      </div>
        <p>Lorem ipsum dolquam facere architecto pariatur culpa.</p>
        <button > <a href="order-now.php">order now</a></button>
      </div>
      </div>
      </div>
    </div>
  </div>
<footer>
  <div class="container">
    <p class="copyright"> &copy; 2023  Resaurant  all rights reserved</p>
 </div>
</footer> 
</div>
<script src="main.js"></script>
</body>
</html>