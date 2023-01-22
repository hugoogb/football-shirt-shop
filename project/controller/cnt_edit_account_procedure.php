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

    if (isset($_POST["img"]) && !empty($_POST["img"])) {
        $img = $_POST["img"];
        $values_update = [$name, $email, $address, $city, $postal_code_zip, $img];

        if (isset($_FILES['img']) && !empty($_FILES['img'])) {
            $imageName = basename($_FILES['img']['name']);
            //    $imagePath = sprintf('%s%s', UPLOADS_FULL_PATH, $imageName);
            $imagePath = sprintf('%s%s', __DIR__ . '/img/', $imageName);

            move_uploaded_file($_FILES['img']['tmp_name'], $imagePath);
        }

        updateUserImg($connDB, $_SESSION['user_id'], $img);
    }
}

header('Location: /');
