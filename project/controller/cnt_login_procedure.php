<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_users.php';

$connDB = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array(
        INPUT_POST,
        [
            'email' => FILTER_DEFAULT,
            'password' => FILTER_DEFAULT,
        ]
    );

    $email = $filters['email'];
    $password = $filters['password'];

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
}

header('Location: /index.php');

//include __DIR__ . '/../view/vw_login_confirmation.php';
