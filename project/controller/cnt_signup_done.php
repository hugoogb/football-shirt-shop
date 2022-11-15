<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_signup.php';

$connDB = connectDB();

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$address = $_POST["address"];
$city = $_POST["city"];
$postal_code_zip = $_POST["postal-code-zip"];
$values_register = [$name, $email, $password, $address, $city, $postal_code_zip];

signUp($connDB, $values_register);

include __DIR__ . '/../view/vw_signup_done.php';
