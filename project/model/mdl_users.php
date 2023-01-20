<?php

function filter_vars_signup($values_register): array
{
    $name = filter_var($values_register[0]);
    $email = filter_var($values_register[1], FILTER_VALIDATE_EMAIL);
    $password = $values_register[2];
    $address = filter_var($values_register[3]);
    $city = filter_var($values_register[4]);
    $postal_code_zip = filter_var($values_register[5], FILTER_VALIDATE_INT);

    return [$name, $email, $password, $address, $city, $postal_code_zip];
}

function signUp($connDB, $values_register): ?\PgSql\Result
{
    $query = "INSERT INTO users (name, email, password, address, city, postal_code_zip) VALUES ($1, $2, $3, $4, $5, $6)";

    $result = pg_query_params($connDB, $query, $values_register);

    if ($result === false) {
        return null;
    }

    return $result;
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

function setUserSession(object $user, $connDB): void
{
    $_SESSION['user_id'] = $user->id;
    $userData = getUserData($connDB, $_SESSION['user_id']);
    if ($userData !== null) {
        $_SESSION['user_data']['name'] = $userData->name;
        $_SESSION['user_data']['email'] = $userData->email;
        $_SESSION['user_data']['address'] = $userData->address;
        $_SESSION['user_data']['city'] = $userData->city;
        $_SESSION['user_data']['postal_code_zip'] = $userData->postal_code_zip;
    }
}

function getUserData($connDB, int $user_id): ?object
{
    $query_result = pg_query_params($connDB, "SELECT name, email, address, city, postal_code_zip FROM users WHERE id = $1", array($user_id));

    $result = pg_fetch_object($query_result);

    if ($result === false) {
        return null;
    }

    return $result;
}
