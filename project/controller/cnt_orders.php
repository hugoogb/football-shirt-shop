<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_orders.php';

$connDB = connectDB();

$list_orders = getOrders($connDB);

if ($list_orders === null) {
    include __DIR__ . '/../view/vw_nothing_to_show.php';
    exit;
}

include __DIR__ . '/../view/vw_orders.php';
