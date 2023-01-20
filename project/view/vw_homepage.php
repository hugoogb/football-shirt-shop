<div class="logo-container">
    <a href="/index.php" target="_self">
        <img class="logo-img"
             src="https://www.classicfootball.shop/wpsystem/wp-content/uploads/2022/03/new-logo-horizontal.png"
             alt="big logo">
    </a>
</div>

<div class="homepage-container">
    <div class="homepage-img-container">
        <img class="homepage-img"
             src="https://i2-prod.chroniclelive.co.uk/incoming/article23626930.ece/ALTERNATES/s1227b/0_Opening-of-NUFC-retro-shirt-pop-up-shop.jpg"
             alt="football shirt shop">
    </div>
    <?php
    if ($categories !== null) {
        ?>
        <div class="categories-homepage-container">
            <h1 class="categories-homepage-title">Categories</h1>
            <div onclick="stopSlideShow(intervalId);list_categories()" class="slideshow-container">
                <h1>See available categories</h1>
                <?php foreach ($categories as $category): ?>
                    <div class="slide fade">
                        <img class="slide-image" src="<?php echo $category['img'] ?>"
                             alt="<?php echo $category['name'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="/js/slideshow.js" type="text/javascript"></script>
<script>
    const intervalId = show_slides(0);
</script>
