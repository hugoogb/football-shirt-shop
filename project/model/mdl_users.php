<?php

function filter_vars_signup($values_register): array
{
    $name = filter_var($values_register[0]);
    $email = filter_var($values_register[1], FILTER_VALIDATE_EMAIL);
    $password = $values_register[2];
    $address = filter_var($values_register[3]);
    $city = filter_var($values_register[4]);
    $postal_code_zip = filter_var($values_register[5], FILTER_VALIDATE_INT);
    $img = $values_register[6];

    return [$name, $email, $password, $address, $city, $postal_code_zip, $img];
}

function signUp($connDB, $values_register): void
{
    $query = "INSERT INTO users (name, email, password, address, city, postal_code_zip, img) VALUES ($1, $2, $3, $4, $5, $6, $7)";

    pg_query_params($connDB, $query, $values_register);
}

function login($connDB, string $email, string $password): ?object
{
    $query_result = pg_query_params($connDB, "SELECT id, email, password FROM users WHERE email = $1 LIMIT 1", array($email));

    $result = pg_fetch_object($query_result);

    if ($result === false) {
        return null;
    }

    return password_verify($password, $result->password) ? $result : null;
}

function setUserSession($connDB, $user_id): void
{
    $userData = getUserData($connDB, $user_id);
    if ($userData !== null) {
        $_SESSION['user_data']['name'] = $userData->name;
        $_SESSION['user_data']['email'] = $userData->email;
        $_SESSION['user_data']['address'] = $userData->address;
        $_SESSION['user_data']['city'] = $userData->city;
        $_SESSION['user_data']['postal_code_zip'] = $userData->postal_code_zip;
        $_SESSION['user_data']['img'] = $userData->img;
    }
}

function getUserData($connDB, int $user_id): ?object
{
    $query_result = pg_query_params($connDB, "SELECT name, email, address, city, postal_code_zip, img FROM users WHERE id = $1", array($user_id));

    $result = pg_fetch_object($query_result);

    if ($result === false) {
        return null;
    }

    return $result;
}

function updateUserData($connDB, int $user_id, $values_update): void
{
    $query = "UPDATE users SET name=$1, email=$2, address=$3, city=$4, postal_code_zip=$5 WHERE id=$user_id";

    pg_query_params($connDB, $query, $values_update);
}

function updateUserImg($connDB, int $user_id, $img): void
{
    $query = "UPDATE users SET img=$1 WHERE id=$user_id";

    pg_query_params($connDB, $query, array($img));
}
