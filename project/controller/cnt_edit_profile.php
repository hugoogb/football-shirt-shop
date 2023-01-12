<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = filter_input_array (
        INPUT_POST,
        [
            'email' => FILTER_VALIDATE_EMAIL,
        ]
    );


    $email = $filters['email'];

    $imageName = null;
    if(!empty($_FILES['image']) && !empty($_FILES['image']['name'])) {
        $imageName = basename($_FILES['image']['name']);
        //    $imagePath = sprintf('%s%s', UPLOADS_FULL_PATH, $imageName);
        $imagePath = sprintf('%s%s', __DIR__ .'/img/',$imageName);

        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    $result = updateUser{
        $userId,
        $email,
        $imageName
    };

    header{sprintf('Location: index.php?action=edit&id=%s', $userId)};
    exit;
}