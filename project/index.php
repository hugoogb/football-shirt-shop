<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$action = $_GET['action'] ?? NULL;

switch ($action) {
    case 'cart-icon':
        include __DIR__ . '/resource_cart_icon.php';
        break;
    case 'form-signup':
        include __DIR__ . '/resource_signup.php';
        break;
    case 'signup':
        include __DIR__ . '/resource_signup_procedure.php';
        break;
    case 'form-login':
        include __DIR__ . '/resource_login.php';
        break;
    case 'login':
        include __DIR__ . '/resource_login_procedure.php';
        break;
    case 'logout':
        include __DIR__ . '/resource_logout.php';
        break;
    case 'list-categories':
        include __DIR__ . '/resource_list_categories.php';
        break;
    case 'list-products':
        include __DIR__ . '/resource_list_products.php';
        break;
    case 'product-detail':
        include __DIR__ . '/resource_product_detail.php';
        break;
    case 'add-session-cart':
        include __DIR__ . '/resource_add_session_cart.php';
        break;
    case 'view-cart':
        include __DIR__ . '/resource_cart.php';
        break;
    case 'clear-cart':
        include __DIR__ . '/resource_clear_cart.php';
        break;
    case 'delete-product-cart':
        include __DIR__ . '/resource_delete_product_cart.php';
        break;
    case 'checkout':
        include __DIR__ . '/resource_checkout.php';
        break;
    default:
        include __DIR__ . '/resource_homepage.php';
        break;
}