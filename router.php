<?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        switch($page) {
            case 'home':
                include 'controllers/homeController.php';
                break;
            case 'products':
                include 'controllers/productController.php';
                break;
            case 'cart':
                include 'controllers/cartController.php';
                break;
            case 'order':
                include 'controllers/orderController.php';
                break;
            default:
                include 'controllers/errorController.php';
        }
    } else {
        include 'controllers/homeController.php';
    }
?>
