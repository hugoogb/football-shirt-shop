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

function signUp($connDB, $values_register)
{
    $query = "INSERT INTO users (name, email, password, address, city, postal_code_zip) VALUES ($1, $2, $3, $4, $5, $6)";

    $result = pg_query_params($connDB, $query, $values_register);

    if ($result === false) {
        return null;
    }

    return $result;
}

function login($connDB, string $email, string $password)
{
    $query_result = pg_query_params($connDB, "SELECT id, email, password FROM users WHERE email = $1 LIMIT 1", array($email));

    $result = pg_fetch_object($query_result);

    if ($result === false) {
        return null;
    }

    return password_verify($password, $result->password) ? $result : null;
}