<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLASSIC FOOTBALL</title>
    <link rel="icon" href="https://www.classicfootball.shop/wpsystem/wp-content/uploads/2022/03/favicon-96x96-1.png">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/css/homepage.css">
    <link rel="stylesheet" type="text/css" href="/css/list_categories.css">
    <link rel="stylesheet" type="text/css" href="/css/list_products.css">
    <link rel="stylesheet" type="text/css" href="/css/product_detail.css">
    <link rel="stylesheet" type="text/css" href="/css/login_signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            type="text/javascript" defer></script>
    <script src="/js/dropdown.js" type="text/javascript" defer></script>
    <script src="/js/fetch_calls.js" type="text/javascript" defer></script>
    <script src="/js/slideshow.js" type="text/javascript" defer></script>
</head>
<body>

<header id="top">
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>
</header>

<section id="content-container">
    <?php require __DIR__ . '/controller/cnt_list_categories.php'; ?>
</section>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>

</body>
</html>