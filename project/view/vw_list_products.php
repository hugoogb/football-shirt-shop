<div class="header-title-container">
    <h1 class="header-title"><?php echo $category->name ?></h1>
</div>
<div class="list-products-container">
    <?php foreach ($list_products as $product): ?>
        <div class="list-product-container">
            <a href="/index.php?action=show-product&product_id=<?php echo $product['id'] ?>">
                <h1 class="list-product-title"><?php echo $product['name'] ?></h1>
                <img class="list-product-image" src="<?php echo $product['img'] ?>"
                     alt="<?php echo $product['name'] ?>">
                <p class="list-product-price"><?php echo $product['price'] ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</div>