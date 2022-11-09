<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registre/Login</title>
    <link rel="icon" href="../img/logo-title-bar.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>

<header>
    <?php require __DIR__ . '/controller/cnt_header.php'; ?>
</header>

<div class="form-container">
    <?php require __DIR__ . '/controller/cnt_register.php'; ?>
</div>

<footer>
    <?php require __DIR__ . '/controller/cnt_footer.php'; ?>
</footer>

</body>
</html>