<?php

function searchQuery($connDB, $query): ?array
{
    $sql_query = "SELECT * FROM products WHERE name LIKE '%$query%'";

    $query_result = pg_query($connDB, $sql_query);

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}