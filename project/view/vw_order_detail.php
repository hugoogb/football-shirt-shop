<div class="header-title-container">
    <h1 class="header-title">Order id: <?php echo $order_id ?></h1>
</div>

<div class="cart-wrapper">
    <div class="cart-header-container">
        <h1>Products in your order</h1>
    </div>
    <?php foreach ($orderProducts as $productInOrder): ?>
        <div class="cart-product-container">
            <div class="cart-product-img">
                <img onclick="product_detail(<?php echo $productInOrder['product_id'] ?>);"
                     src="<?php echo $productInOrder['product_img']; ?>"
                     alt="<?php echo $productInOrder['product_name']; ?>">
            </div>
            <div class="cart-product-container-info">
                <h2>
                    <?php echo $productInOrder['product_name']; ?>
                </h2>
                <div class="cart-product-quantity-price-container">
                    <p>
                        Quantity:
                        <?php echo $productInOrder['product_quantity']; ?>
                    </p>
                    <p>
                        <strong><?php echo $productInOrder['product_price']; ?> €</strong>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
