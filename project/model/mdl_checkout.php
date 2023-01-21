<?php

function saveOrderToDB($connDB): void
{
    $date = date("Y-m-d H:i:s");
    $values_order = [$_SESSION['user_id'], $date, $_SESSION['cart']['total_quantity'], $_SESSION['cart']['total_price']];

    $query = "INSERT INTO orders (user_id, date, total_products, total_import) VALUES ($1, $2, $3, $4) RETURNING id";

    $result = pg_query_params($connDB, $query, $values_order);

    $orders = pg_fetch_object($result);

    foreach ($_SESSION['cart']['products'] as $productInCart):
        $values_order_products = [$productInCart['product_id'], $productInCart['quantity'], $productInCart['price'], $productInCart['img'], $orders->id];

        $query = "INSERT INTO order_products (product_id, quantity, price, img, order_id) VALUES ($1, $2, $3, $4, $5)";

        pg_query_params($connDB, $query, $values_order_products);
    endforeach;
}
