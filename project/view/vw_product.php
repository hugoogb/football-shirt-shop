<?php foreach ($products as $product): ?>
    <div class="product-container">
        <div class="product-image-container">
            <img class="product-image" src="<?php echo $product['img'] ?>" alt="<?php echo $product['name'] ?>">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1 class="product-title"><?php echo $product['name'] ?></h1>
                <p class="product-description"><?php echo $product['description'] ?></p>
            </div>
            <div class="product-price-btn">
                <h4 class="product-price"><?php echo $product['price'] ?></h4>
                <button class="product-button" type="button">Add to cart</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>
