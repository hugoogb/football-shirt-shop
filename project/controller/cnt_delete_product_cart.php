<?php

require_once __DIR__ . '/../model/mdl_cart.php';

$productName = $_GET['product_name'] ?? null;
deleteSingleProductFromCart($productName);

include __DIR__ . '/../view/vw_cart.php';
