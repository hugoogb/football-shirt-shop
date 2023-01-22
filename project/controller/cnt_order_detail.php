<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_orders.php';
require_once __DIR__ . '/../model/mdl_product_detail.php';

$connDB = connectDB();

$order_id = $_GET['order_id'] ?? null;
$orderProducts = getOrderDetailById($connDB, $order_id);

include __DIR__ . '/../view/vw_order_detail.php';
