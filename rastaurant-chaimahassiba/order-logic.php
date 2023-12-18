<?php
require ('config/config.php');

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $food = $_POST['food'];
    $drink = $_POST['drink'];
    $address = $_POST['address'];

    $query = "INSERT INTO orders (name, phone, food, drinks, address) VALUES ('$name', '$phone', '$food', '$drink', '$address')";

    mysqli_query($conn, $query);

    
    $_SESSION['success']= "your order succussfully";
    header('location: order-now.php');
    

} else {
    // echo "hasi";    
}