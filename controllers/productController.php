<?php
    include 'models/productModel.php';
    include 'views/productView.php';

    $productId = isset($_GET['id']) ? $_GET['id'] : null;
    $product = getProductDetails($productId); // Function from productModel.php

    if ($product) {
        displayProduct($product); // Function from productView.php
    } else {
        include 'controllers/errorController.php';
    }
?>
