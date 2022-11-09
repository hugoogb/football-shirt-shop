<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="category-container">
            <a href="product.php?id=<?php echo $category['id'] ?>">
                <div class="anchor-container">
                    <h1 class="category-title"><?php echo $category['name'] ?></h1>
                    <img class="category-image" src="<?php echo $category['img'] ?>">
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>