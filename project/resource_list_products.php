<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLASSIC FOOTBALL</title>
    <link rel="icon" href="img/logo-small.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/list_products.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

<header id="top">
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>
</header>

<section>
    <?php require __DIR__ . '/controller/cnt_list_products.php'; ?>
</section>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>

<?php require __DIR__ . '/controller/cnt_scroll_top.php'; ?>

</body>
</html>