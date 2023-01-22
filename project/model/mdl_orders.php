<?php

function getOrders($connDB): ?array
{
    $query_result = pg_query_params($connDB, "SELECT * FROM orders WHERE user_id = $1", array($_SESSION['user_id']));

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}

function getOrderDetailById($connDB, $id): ?array
{
    $query_result = pg_query_params($connDB, "SELECT * FROM order_products WHERE order_id = $1", array($id));

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}