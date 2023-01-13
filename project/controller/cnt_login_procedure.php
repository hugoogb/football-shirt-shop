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
    }
}

header('Location: /index.php');

//include __DIR__ . '/../view/vw_login_confirmation.php';
