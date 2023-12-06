<?php
    include 'models/productModel.php';
    include 'views/homeView.php';

    $products = getFeaturedProducts(); // Function from productModel.php
    displayHome($products); // Function from homeView.php
?>
