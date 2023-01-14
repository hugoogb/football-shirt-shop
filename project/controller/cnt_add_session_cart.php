<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_cart.php';
require_once __DIR__ . '/../model/mdl_product_detail.php';

$connDB = connectDB();

$productId = $_GET['product_id'] ?? null;
$product = getProductById($connDB, $productId);
$quantity = $_GET['product_quantity'] ?? null;
addProductToSessionCart($product, $quantity);
