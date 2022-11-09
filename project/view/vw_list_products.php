<div class="products-container">
    <?php foreach ($categories as $category): ?>
        <h1><?php echo $category['name'] ?></h1>
    <?php endforeach; ?>
    <?php foreach ($products as $product): ?>
        <div class="product-container">
            <a href="index.php?action=product&product_id=<?php echo $product['id'] ?>">
                <h1 class="product-title"><?php echo $product['name'] ?></h1>
                <img class="product-image" src="<?php echo $product['img'] ?>">
                <h3><?php echo $product['description'] ?></h3>
                <p><?php echo $product['price'] ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</div>