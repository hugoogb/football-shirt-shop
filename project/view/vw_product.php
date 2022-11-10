<?php foreach ($products as $product): ?>
    <div class="product-container">
        <a href="index.php?action=show-product&product_id=<?php echo $product['id'] ?>">
            <h1 class="product-title"><?php echo $product['name'] ?></h1>
            <img class="product-image" src="<?php echo $product['img'] ?>">
            <p><?php echo $product['description'] ?></p>
            <p><?php echo $product['price'] ?></p>
        </a>
    </div>
<?php endforeach; ?>
