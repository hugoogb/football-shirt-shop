<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_product.php';

$connDB = connectDB();

$id = $_GET['product_id'] ?? null;
$products = getProductById($connDB, $id);

include __DIR__ . '/../view/vw_product.php';