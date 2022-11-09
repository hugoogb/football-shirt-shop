<?php

function getCategories($connDB): array
{
    $sql_query = "SELECT * FROM categories";

    $query_result = pg_query($connDB, $sql_query);

    return pg_fetch_all($query_result);
}