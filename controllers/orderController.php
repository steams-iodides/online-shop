<?php
    include 'models/orderModel.php';
    include 'views/orderView.php';

    // Order-related logic using functions from orderModel.php
    $orderSummary = processOrder();
    displayOrderSummary($orderSummary);
?>
