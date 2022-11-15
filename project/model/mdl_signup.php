<?php

function signUp($connDB, $values_register): void
{
    $query = "INSERT INTO users (name, email, password, address, city, postal_code_zip) VALUES ($1, $2, $3, $4, $5, $6)";

    pg_query_params($connDB, $query, $values_register);
}