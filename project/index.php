<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$action = $_GET['action'] ?? NULL;

switch ($action) {
    case 'register':
        include __DIR__ . '/resource_register.php';
        break;
    case 'categories':
        include __DIR__ . '/resource_list_categories.php';
        break;
    case 'list-products':
        include __DIR__ . '/resource_list_products.php';
        break;
    case 'product-detail':
        include __DIR__ . '/resource_product_detail.php';
        break;
    default:
        include __DIR__ . '/resource_homepage.php';
        break;
}