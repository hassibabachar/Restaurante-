<!DOCTYPE php>
<php lang="en">
<head>
    <me"ta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <!--  Render All Elements Normally  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!--  Font Awesome Library  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!--  Main Template Css File  -->
    <link rel="stylesheet" href="css/style.css">

    <!--  Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
</head>

<?php 
require('conponent/header.php');
?>

<!--  start landing page  -->
<section class="landing">
    <div class="container">
        <h1> Welcome To Our restaurant</h1>
        <p> From adding more balanced options to our Happy Meal, to serving up fresh chicken snacks and the delicious Italian pizza that are cooked when you order, we’re always finding ways to show our commitment to our customers and our food </p>
        <div class="hover">
            <a href="#gallery"><span>View More</span> </a> 
        </div>
    </div>
</section>
<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="gall">
            <div class="image">
                <img src="images/burger-dinner-food-hamburger-wallpaper-preview.jpg">
            </div>
            <div class="text">
                <h1> tell us your idea </h1>
                <p><em> we provide the best quality food</em></p>
            </div>
        </div>
        <div class="gall" id="gal">
            <div class="text">
                <h1> we provide the best quality food</h1>
                <p><em> We offer atmospheric dining in a relaxing setting that attracts people from far and wide.<br> The experience is unlike any other,  from dishes to share with family and friends </em></p>
            </div>
            <div class="image-1">
                <img src="images/Screenshot 1.png">
            </div>
        </div>
    </div>
</div>
<!--star about -->
<div class="about" id="about">
    <div class="container" >
        <div class="TITLE">
            <H1>About</H1>
        </div>
        <div class="abt"> 
            <div class="image-3">
                <img src="images/chef-2.png">
            </div>
            <div class="text-1">
                <h1> Our Specialities </h1>
                <p class="text-2">Our Italian chefs had an experience more than five years on cooking dishes using the finest ingredients based on culinary techniques passed down through the generations. The result is truly authentic Italic gastronomy.<hr></p>
                <h1> Services</h1>
                <div class="icon-1">
                    <i class="fa-solid fa-truck-fast"></i>
                    <p>fast delivery</p><br>
                    <i class="fa-sharp fa-solid fa-credit-card"></i>
                    <p>easy payment ways</p><br>
                    <i class="fa-solid fa-burger"></i>
                    <p>available all the time </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--start reveiw --> 
<div class="reveiw">
    <div class="reveiw-heading">
        <h1>Reviews</h1>
    </div>
    <div class="reveiw-box-container">
        <!--BOX-1-------------->
        <div class="reveiw-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="images/girl.jfif"/>
                    </div>
                    <div class="name-user">
                        <h4>Touseeq Ijaz</h4>
                    </div>
                </div>
            </div>
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i><!--Empty star-->
            </div>
            <div class="client-comment">
                    <p>I love to buy my food from this restaurent its the best website for me </p>
            </div>
        </div>
        <!--BOX-1-------------->
        <div class="reveiw-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="images/boy.jfif"/>
                    </div>
                    <div class="name-user">
                        <h4>Saad Sam</h4>
                    </div>
                </div>
            </div>
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="client-comment">
                <p> Thank you for your gorgeous services and your delicious taste i really love it </p>
            </div>
        </div>
        <!--BOX-1-------------->
        <div class="reveiw-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="images/man.jfif"/>
                    </div>
                    <div class="name-user">
                        <h4> Mouhamed Bel </h4>
                    </div>
                </div>
            </div> 
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="client-comment">
                <p> I can't pass my day without having an order from your website! its the best one ever </p>
            </div>
        </div>
    </div>
</div>
<!--start footer & contact-->
<footer>
    <div class="container">
        <div class="contact" id="contact"> contact us</div>
        <img src="images/logo.png" alt="logo">
        <h1>a food made with love!</h1>
        <div class="social-icon">
            <i class="fa-brands fa-instagram"></i>
            <a href="">@restaurant-2</a><br>
            <i class="fa-brands fa-facebook"></i>
            <a href="">Restaurant online</a><br>
            <i class="fa-solid fa-phone"></i>
            <a href="">+213 665455858</a><br>
            <i class="fa-solid fa-envelope"></i>
            <a href="">Restaurant-online@gmail.com</a> 
        </div>
            <p class="copyright"> &copy; 2023  Resaurant  all rights reserved</p>
    </div>
</footer>
<script src="main.js"></script>
</body>
</html>