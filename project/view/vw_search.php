<div class="header-title-container">
    <h1 class="header-title">Search result</h1>
</div>

<?php
if (isset($searchResults) && !empty($searchResults)) {
    ?>
    <div class="cart-wrapper">
        <?php foreach ($searchResults as $productInResults): ?>
            <div class="cart-product-container">
                <div class="cart-product-img">
                    <img onclick="product_detail(<?php echo $productInResults['id'] ?>);"
                         src="<?php echo $productInResults['img']; ?>"
                         alt="<?php echo $productInResults['name']; ?>">
                </div>
                <div class="cart-product-container-info">
                    <h2>
                        <?php echo $productInResults['name']; ?>
                    </h2>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
} else {
    ?>
    <div class="error-wrapper">
        <div class="error-container">
            <h1 class="error-title">Nothing found in search...</h1>
        </div>
    </div>
    <?php
}
?>
