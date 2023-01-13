<div class="header-title-container">
    <h1 class="header-title">Categories</h1>
</div>

<div class="categories-container">
    <?php foreach ($categories as $category):
        $category_name = htmlentities($category['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>
        <div class="category-container">
            <a onclick="list_products(<?php echo $category['id'] ?>)">
                <h1 class="category-title"><?php echo $category_name ?></h1>
                <img class="category-image" src="<?php echo $category['img'] ?>" alt="<?php echo $category['name'] ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>