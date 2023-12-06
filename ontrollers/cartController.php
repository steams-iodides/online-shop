<?php
    include 'models/cartModel.php';
    include 'views/cartView.php';

    // Cart-related logic using functions from cartModel.php
    $cartItems = getCartItems();
    displayCart($cartItems);
?>
