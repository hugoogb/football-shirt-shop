<?php

function getProductsByCategoryId($connDB, $id): ?array
{
    $query_result = pg_query_params($connDB, "SELECT * FROM products WHERE category_id = $1", array($id));

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}

function getAllProducts($connDB): ?array
{
    $query_result = pg_query($connDB, "SELECT * FROM products");

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}
