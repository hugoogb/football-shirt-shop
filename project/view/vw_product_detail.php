<div class="product-wrapper">
    <div class="product-container">
        <div class="product-image-container">
            <img class="product-image" src="<?php echo $product->img ?>" alt="<?php echo $product->name ?>">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1 class="product-title"><?php echo $product->name ?></h1>
                <h2 class="product-category"><?php echo $category->name ?></h2>
                <p class="product-description"><?php echo $product->description ?></p>
            </div>
            <div class="product-price-btn">
                <h3 class="product-price"><?php echo $product->price ?></h3>
                <button class="product-btn" type="button">Add to cart</button>
            </div>
        </div>
    </div>
</div>
