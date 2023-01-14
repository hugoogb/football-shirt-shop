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

    $values_register = [$name, $email, $password_hash, $address, $city, $postal_code_zip];

    $values_register = filter_vars_signup($values_register);

    $result = signUp($connDB, $values_register);

    if (isset($_POST['auto-login'])) {
        $user = login($connDB, $email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user->id;
            $userData = getUserData($connDB, $_SESSION['user_id']);
            $_SESSION['user_data']['name'] = $userData->name;
            $_SESSION['user_data']['email'] = $userData->email;
            $_SESSION['user_data']['address'] = $userData->address;
            $_SESSION['user_data']['city'] = $userData->city;
            $_SESSION['user_data']['postal_code_zip'] = $userData->postal_code_zip;
        }
    } else {
        include __DIR__ . '/../view/vw_signup_confirmation.php';
        exit;
    }
}

header('Location: /index.php');
