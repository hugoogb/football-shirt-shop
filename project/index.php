<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$action = $_GET['action'] ?? NULL;

switch ($action) {
    case 'view-login':
        include __DIR__ . '/controller/cnt_login.php';
        break;
    case 'view-signup':
        include __DIR__ . '/controller/cnt_signup.php';
        break;
    case 'list-categories':
        include __DIR__ . '/controller/cnt_list_categories.php';
        break;
    case 'list-products':
        include __DIR__ . '/controller/cnt_list_products.php';
        break;
    case 'product-detail':
        include __DIR__ . '/controller/cnt_product_detail.php';
        break;
    case 'signup-procedure':
        include __DIR__ . '/controller/cnt_signup_procedure.php';
        break;
    default:
        include __DIR__ . '/resource_homepage.php';
        break;
}