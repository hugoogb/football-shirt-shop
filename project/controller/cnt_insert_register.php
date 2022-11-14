<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_insert_register.php';

$connDB = connectDB();

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$address = $_POST["address"];
$city = $_POST["city"];
$postal_code_zip = $_POST["postal-code-zip"];
$values_register = [$name, $email, $password, $address, $city, $postal_code_zip];

insertValuesRegister($connDB, $values_register);

include __DIR__ . '/../view/vw_insert_register.php';
