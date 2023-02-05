<?php

/**
 * @return array
 */
function getExample(): array
{
    $conn = Db::conn();

    $stmt = $conn->prepare(
        'SELECT * FROM examples'
    );

    $stmt->execute();

    return $stmt->fetchAll();
}
