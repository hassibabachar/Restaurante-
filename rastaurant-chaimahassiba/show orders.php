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
    <link rel="stylesheet" href="css/show-orders.css">

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

$query = "SELECT * FROM  orders ";
$orders =  mysqli_query($conn, $query);


?>
<!-- start landing -->
<div class="landing">
  <div class="container">
    <div class="gradient">
        <h1>Orders</h1>
     </div>
  <table id="orders">
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Food</th>
    <th>Drinks</th>
    <th>Delete</th>
  </tr>
  </table>
    <?php while($order = mysqli_fetch_assoc($orders)) : ?>
      <table id="orders">
    <tr>
    <td><?= $order['name'] ?></td>
    <td> <?= $order['phone'] ?> </td>
    <td><?= $order['address'] ?> </td>
    <td><?=$order['food'] ?></td>
    <td><?=$order['drinks'] ?> </td>
    <td><a href="delet.php?id=<?= $order['id'] ?>"><button>Delete</button></a> </td>
  </tr>
  </table>
  <?php endwhile ?>

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