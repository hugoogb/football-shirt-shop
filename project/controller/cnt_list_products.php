<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_category.php';
require_once __DIR__ . '/../model/mdl_list_products.php';

$connDB = connectDB();

$id = $_GET['category_id'] ?? null;
$category = getCategoryById($connDB, $id);
$list_products = getProductsByCategoryId($connDB, $id);

if ($list_products === null) {
    include __DIR__ . '/../view/vw_nothing_to_show.php';
    exit;
}

include __DIR__ . '/../view/vw_list_products.php';
