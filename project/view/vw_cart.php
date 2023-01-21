<div class="header-title-container">
    <h1 class="header-title">Cart</h1>
</div>

<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    ?>
    <div class="cart-wrapper">
        <div class="cart-header-container">
            <h1>Products in your cart</h1>
            <div class="cart-container-delete-all">
                <span onclick="clearCart()">Delete all products</span>
            </div>
        </div>
        <?php foreach ($_SESSION['cart']['products'] as $productInCart): ?>
            <div class="cart-product-container">
                <div class="cart-product-img">
                    <img onclick="product_detail(<?php echo $productInCart['product_id'] ?>);"
                         src="<?php echo $productInCart['img']; ?>"
                         alt="<?php echo $productInCart['name']; ?>">
                </div>
                <div class="cart-product-container-info">
                    <h2>
                        <?php echo $productInCart['name']; ?>
                    </h2>
                    <div class="cart-product-quantity-price-container">
                        <p>
                            Quantity:
                            <?php echo $productInCart['quantity']; ?>
                        </p>
                        <p>
                            <?php echo $productInCart['price']; ?>
                            €
                        </p>
                    </div>
                    <div onclick="deleteProductFromCart('<?php echo $productInCart['name']; ?>')"
                         class="cart-product-delete">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>
                        </svg>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="cart-total-price-checkout">
            <p>Total price: <strong><?php echo $_SESSION['cart']['total_price'] ?> €</strong></p>
            <button class="product-btn" type="button">Checkout</button>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="error-wrapper">
        <div class="error-container">
            <h1 class="error-title">Cart is empty... Add some items to it!</h1>
            <h2 onclick="list_categories();" class="error-subtitle">See categories</h2>
        </div>
    </div>
    <?php
}
?>
