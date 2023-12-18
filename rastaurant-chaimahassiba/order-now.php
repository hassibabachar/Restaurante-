<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <!--  Render All Elements Normally  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!--  Font Awesome Library  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!--  Main Template Css File  -->
    <link rel="stylesheet" href="css/order-now.css">

    <!--  Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
    <title>Order now </title>
</head>

<?php 

require('conponent/header.php');

?>
<!-- start landing -->
<div class="landing">
  <div class="container">
    <?php if(isset($_SESSION['success'])) : ?>
    <div class="operation"><h2> Your Order Has Been Successfuly <i class="fa-solid fa-check"></i></h2></div>
    <?php 
    session_unset() ;
    else :?>
    <form action="order-logic.php" method="post">
     <img src="images/shopping-cart.png" alt="shop">
     <div class="gradient">
        <h1>Order now</h1>
        <h5>Fast with good price</h5>
     </div>
    <div class="input-feild">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name ="phone" placeholder="Phone Number" class="number" required> 
        <div class="icon1"> <i class="fa-solid fa-phone"></i></div>
        <div class="select">
        <select   name="food" id="" required>
        <option selected disabled>Food Name</option>
                <option value="pizza 4 seasons">pizza 4 seasons</option>
                <option value="pizza Spicy chiken ranch">pizza Spicy chiken ranch</option>
                <option value="pizza chiken Shawarma">pizza chiken Shawarma</option>
                <option value="Sandwich chicken">Sandwich chicken</option>
                <option value="Sandwich meat">Sandwich meat</option>
                <option value="Sandwich chawarma">Sandwich chawarma</option>
                <option value="double cheese burger">double cheese burger</option>
                <option value="Twice burger chicken ">Twice burger chicken </option>
                <option value="Tour burger chiken">Tour burger chiken </option>
        </option>
        </select>
        </div>
        <div class="select-1">
        <select  name="drink" id="" >
        <option selected disabled>Drinks</option>
                <option value="Fresh kiwi">Fresh kiwi</option>
                <option value="Fresh lemon with mint">Fresh lemon with mint</option>
                <option value="Fresh Lemon">Fresh Lemon</option>
                <option value="Fresh Orange">Fresh Orange</option>
                <option value="Fresh Strawberry">Fresh Strawberry</option>
                <option value="Schweppes gold">Schweppes gold</option>
                <option value="Schweppes Lemon">Schweppes Lemon</option>
                <option value="Schweppes pomegranate">Schweppes pomegranate</option>
                <option value="Cola ">Cola </option>
                <option value="Water">Water </option>
        </option>
        </select>
        </div>
        <input type="text" placeholder="address " name ="address" class="input" required>
        <div class="icon2">
        <i class="fa-solid fa-location-dot"></i></div>
        <input   type="submit" value="Submit" name ="submit">
    </div>       
    </form>
    <?php endif ?>

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