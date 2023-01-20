<?php

function getCategories($connDB): ?array
{
    $sql_query = "SELECT * FROM categories";

    $query_result = pg_query($connDB, $sql_query);

    $result = pg_fetch_all($query_result);

    if (!$result) {
        return null;
    }

    return $result;
}