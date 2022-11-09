<div class="categories-container">
    <h1>Categories</h1>
    <?php foreach ($categories as $category): ?>
        <div class="category-container">
            <a href="index.php?action=list-products&category_id=<?php echo $category['id'] ?>">
                <h1 class="category-title"><?php echo $category['name'] ?></h1>
                <img class="category-image" src="<?php echo $category['img'] ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>