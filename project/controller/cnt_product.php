<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_category.php';
require_once __DIR__ . '/../model/mdl_product.php';

$connDB = connectDB();

$id = $_GET['product_id'] ?? null;
$product = getProductById($connDB, $id);
$category = getCategoryById($connDB, $product->category_id);

include __DIR__ . '/../view/vw_product.php';