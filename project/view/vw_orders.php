<div class="header-title-container">
    <h1 class="header-title">Orders</h1>
</div>

<div class="cart-wrapper">
    <?php foreach ($list_orders as $order): ?>
        <div class="cart-product-container orders-container">
            <div class="form-inputs single-order-container">
                <h2 class="order-title">Order: <?php echo $order['id'] ?></h2>
                <h3>Date</h3>
                <p>
                    <?php echo $order['date']; ?>
                </p>
                <h3>Total products</h3>
                <p>
                    <?php echo $order['total_products']; ?>
                </p>
                <h3>Total import</h3>
                <p>
                    <?php echo $order['total_import']; ?> €
                </p>
            </div>
            <div class="form-submit">
                <button onclick="orderDetail(<?php echo $order['id'] ?>)" class="checkout-button logged-in-button"
                        type="button"> See order details
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
