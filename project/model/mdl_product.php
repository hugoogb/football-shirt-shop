<?php

function getProductById($connDB, $id): array
{
    if ($id) {
        $query_result = pg_query_params($connDB, "SELECT * FROM products WHERE id = $1", array($id));

        return pg_fetch_all($query_result);
    }

    return [];
}