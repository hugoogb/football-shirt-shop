<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_checkout.php';
require_once __DIR__ . '/../model/mdl_cart.php';

$connDB = connectDB();

saveOrderToDB($connDB);
deleteAllProductsFromCart();

include __DIR__ . '/../view/vw_checkout_confirmation.php';
