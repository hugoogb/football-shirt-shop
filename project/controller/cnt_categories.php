<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_list_categories.php';

$connDB = connectDB();
$categories = getCategories($connDB);

include __DIR__ . '/../view/vw_list_categories.php';
