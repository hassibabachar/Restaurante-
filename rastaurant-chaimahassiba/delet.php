<?php
require ('config/config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "akjsdflaf";
    $query = "DELETE FROM  orders WHERE orders.id =$id LIMIT 1";
    $orders =  mysqli_query($conn, $query);
    header('location: show orders.php');
}