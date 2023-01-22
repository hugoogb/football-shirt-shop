<?php

function addProductToSessionCart($product, $quantity): void
{
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        if (isset($_SESSION['cart']['products'][$product->name]) &&
            !empty($_SESSION['cart']['products'][$product->name])) {
            $_SESSION['cart']['products'][$product->name]['quantity'] += $quantity;
            $_SESSION['cart']['products'][$product->name]['price'] += $product->price;
        } else {
            $_SESSION['cart']['products'][$product->name]['quantity'] = $quantity;
            $_SESSION['cart']['products'][$product->name]['price'] = $product->price;
        }

        $_SESSION['cart']['products'][$product->name]['product_id'] = $product->id;
        $_SESSION['cart']['products'][$product->name]['name'] = $product->name;
        $_SESSION['cart']['products'][$product->name]['img'] = $product->img;

        calculateTotals();
    }
}

function deleteAllProductsFromCart(): void
{
    unset($_SESSION['cart']);
}

function deleteSingleProductFromCart($productName): void
{
    unset($_SESSION['cart']['products'][$productName]);

    if (empty($_SESSION['cart']['products'])) {
        unset($_SESSION['cart']);
    } else {
        calculateTotals();
    }
}

function calculateTotals(): void
{
    $total_quantity = 0;
    $total_price = 0;
    foreach ($_SESSION['cart']['products'] as $productInCart):
        $total_quantity += $productInCart['quantity'];
        $total_price += $productInCart['price'];
    endforeach;

    $_SESSION['cart']['total_quantity'] = $total_quantity;
    $_SESSION['cart']['total_price'] = $total_price;
}