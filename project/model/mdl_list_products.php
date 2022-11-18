<?php

function getProductsByCategoryId($connDB, $id): array
{
    $query_result = pg_query_params($connDB, "SELECT * FROM products WHERE category_id = $1", array($id));

    return pg_fetch_all($query_result);
}

function getAllProducts($connDB): array
{
    $query_result = pg_query($connDB, "SELECT * FROM products");

    return pg_fetch_all($query_result);
}
