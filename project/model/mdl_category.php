<?php

function getCategoryById($connDB, $id)
{
    $query_result = pg_query_params($connDB, "SELECT * FROM categories WHERE id = $1", array($id));

    return pg_fetch_object($query_result);
}