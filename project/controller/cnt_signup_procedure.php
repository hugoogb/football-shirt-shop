<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_users.php';

$connDB = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postal_code_zip = $_POST["postal-code-zip"];
    $img = $_POST["img"];

    $values_register = [$name, $email, $password_hash, $address, $city, $postal_code_zip, $img];

    $values_register = filter_vars_signup($values_register);

    signUp($connDB, $values_register);

    if (isset($_POST['auto-login'])) {
        $user = login($connDB, $email, $password);

        if ($user) {
            setUserSession($user, $connDB);
        }
    } else {
        include __DIR__ . '/../view/vw_signup_confirmation.php';
        exit;
    }
}

header('Location: /');
