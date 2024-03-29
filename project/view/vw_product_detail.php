<div class="product-wrapper">
    <div class="product-container">
        <div class="product-image-container">
            <img class="product-image" src="<?php echo $product->img ?>" alt="<?php echo $product->name ?>">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1 class="product-title"><?php echo $product->name ?></h1>
                <h2 class="product-category"><?php echo $category->name ?></h2>
                <p class="product-description"><?php echo $product->description ?></p>
            </div>
            <div class="product-cart-info">
                <div class="product-quantity">
                    <label>Quantity:</label>
                    <input type="number" id="product-quantity" min="1" value="1">
                </div>
                <div class="product-price-btn">
                    <h3 class="product-price"><?php echo $product->price ?>€</h3>
                    <?php
                    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                        ?>
                        <button onclick="addProductToSessionCart(<?php echo $product->id ?>, getProductQuantity())"
                                class="logged-in-button" type="button">Add to cart
                        </button>
                        <?php
                    } else {
                        ?>
                        <button>Login to add to cart</button>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
