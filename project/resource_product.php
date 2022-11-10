<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLASSIC FOOTBALL</title>
    <link rel="icon" href="img/logo-small.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/product.css"
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>
</header>

<section>
    <?php require __DIR__ . '/controller/cnt_product.php'; ?>
</section>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>
</body>
</html>