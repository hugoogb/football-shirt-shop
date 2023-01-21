<?php

require_once __DIR__ . '/../model/mdl_cart.php';

deleteAllProductsFromCart();

include __DIR__ . '/../view/vw_cart.php';
