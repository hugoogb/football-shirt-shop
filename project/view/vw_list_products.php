<div class="header-title-container">
    <h1 class="header-title"><?php echo $category->name ?></h1>
</div>

<div class="go-back-container">
    <a href="javascript: history.back()" target="_self">
        <div class="go-back-items">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3V256v41.7L459.5 440.6zM256 352V256 128 96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V352z"/>
            </svg>
            <h4>categories</h4>
        </div>
    </a>
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