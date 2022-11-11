<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registre/Login</title>
    <link rel="icon" href="/img/logo-small.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/js/dropdown.js"></script>
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>
</header>

<section>
    <?php require __DIR__ . '/controller/cnt_register.php'; ?>
</section>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>

</body>
</html>