<div class="header-title-container">
    <h1 class="header-title"><?php echo $category->name ?></h1>
</div>

<div class="list-products-container">
    <?php foreach ($list_products as $product): ?>
        <div class="list-product-container-btn">
            <div class="list-product-container">
                <a onclick="product_detail(<?php echo $product['id'] ?>)">
                    <h1 class="list-product-title"><?php echo $product['name'] ?></h1>
                    <img class="list-product-image" src="<?php echo $product['img'] ?>"
                         alt="<?php echo $product['name'] ?>">
                    <p class="list-product-price"><?php echo $product['price'] ?> €</p>
                </a>
            </div>
            <?php
            if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                ?>
                <button onclick="addProductToSessionCart(<?php echo $product['id'] ?>, 1)" class="logged-in-button">Add
                    to cart (1)
                </button>
                <?php
            } else {
                ?>
                <button>Login to add to cart</button>
                <?php
            }
            ?>
        </div>
    <?php endforeach; ?>
</div>