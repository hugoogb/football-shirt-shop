<?php foreach ($products as $product): ?>
    <div class="product-container">
        <h1 class="product-title"><?php echo $product['name'] ?></h1>
        <img class="product-image" src="<?php echo $product['img'] ?>" alt="<?php echo $product['name'] ?>">
        <p><?php echo $product['description'] ?></p>
        <p><?php echo $product['price'] ?></p>
    </div>
<?php endforeach; ?>
