<div class="header-title-container">
    <h1 class="header-title">Categories</h1>
</div>

<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="category-container">
            <a onclick="list_products(<?php echo $category['id'] ?>)">
                <h1 class="category-title"><?php echo $category['name'] ?></h1>
                <img class="category-image" src="<?php echo $category['img'] ?>" alt="<?php echo $category['name'] ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>