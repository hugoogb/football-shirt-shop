<?php

require_once __DIR__ . '/../model/mdl_connectDB.php';
require_once __DIR__ . '/../model/mdl_users.php';

$connDB = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postal_code_zip = $_POST["postal-code-zip"];
    $values_update = [$name, $email, $address, $city, $postal_code_zip];

    updateUserData($connDB, $_SESSION['user_id'], $values_update);

    if (isset($_FILES['img']) && !empty($_FILES['img'])) {
        $imageName = sprintf('%s-%s', $_SESSION['user_id'], basename($_FILES['img']['name']));

        $imagePath = sprintf('%s%s', $imgAbsolutePath, $imageName);

        move_uploaded_file($_FILES['img']['tmp_name'], $imagePath);

        updateUserImg($connDB, $_SESSION['user_id'], $imageName);
    }

    setUserSession($connDB, $_SESSION['user_id']);
}

header('Location: /');
