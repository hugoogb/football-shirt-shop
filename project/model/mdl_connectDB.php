<?php

function connectDB()
{
    return pg_connect("host=localhost dbname=tdiw-k5 user=tdiw-k5 password=xmidd53M");
}