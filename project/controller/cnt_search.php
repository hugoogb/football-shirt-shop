<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_search.php';

$connDB = connectDB();

$query = $_GET['query'] ?? null;
$searchResults = searchQuery($connDB, $query);

include __DIR__ . '/../view/vw_search.php';
