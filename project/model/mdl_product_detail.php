<?php

function getProductById($connDB, $id): ?object
{
    $query_result = pg_query_params($connDB, "SELECT * FROM products WHERE id = $1", array($id));

    $result = pg_fetch_object($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}