<?php

function connectDB(): ?\PgSql\Connection
{
    $result = pg_connect("host=localhost dbname=tdiw-k5 user=tdiw-k5 password=xmidd53M");

    if (!$result) {
        return null;
    }

    return $result;
}