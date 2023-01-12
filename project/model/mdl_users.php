<?php

function login($connDB, string $email, string $password)
{
    $query_result = pg_query_params($connDB, "SELECT id, email, password FROM users WHERE email = $1 LIMIT 1", array($email));

    $result = pg_fetch_object($query_result);

    if ($result === false) {
        return null;
    }

    return password_verify($password, $result->password) ? $result : null;
}
