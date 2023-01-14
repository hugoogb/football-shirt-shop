<?php

function addProductToSessionCart($product, $quantity)
{
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        if (isset($_SESSION['cart']['products'][$product->name]) &&
            !empty($_SESSION['cart']['products'][$product->name])) {
            $_SESSION['cart']['products'][$product->name]['quantity'] += $quantity;
        } else {
            $_SESSION['cart']['products'][$product->name]['quantity'] = $quantity;
        }

        $_SESSION['cart']['products'][$product->name]['product_id'] = $product->id;
        $_SESSION['cart']['products'][$product->name]['name'] = $product->name;
        $_SESSION['cart']['products'][$product->name]['price'] = $product->price;
        $_SESSION['cart']['products'][$product->name]['img'] = $product->img;

        $total_quantity = 0;
        $total_price = 0;
        foreach ($_SESSION['cart']['products'] as $productInCart):
            $total_quantity += $productInCart['quantity'];
            $total_price += $productInCart['price'] * $productInCart['quantity'];
        endforeach;

        $_SESSION['cart']['total_quantity'] = $total_quantity;
        $_SESSION['cart']['total_price'] = $total_price;
    }
}