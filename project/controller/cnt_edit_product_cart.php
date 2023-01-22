<?php

require_once __DIR__ . '/../model/mdl_cart.php';

$productName = $_GET['product_name'] ?? null;
$method = $_GET['method'] ?? null;
editProductFromCart($productName, $method);

include __DIR__ . '/../view/vw_cart.php';
