<!-- resource_homepage.php -->

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
    <link rel="stylesheet" type="text/css" href="css/info-homepage.css"
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>

    <?php require __DIR__ . '/controller/cnt_logo.php'; ?>
</header>

<section class="homepage-info-section">
    <div class="homepage-info-container">
        <?php require __DIR__ . '/controller/cnt_info_homepage.php'; ?>
    </div>
</section>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>
</body>
</html>