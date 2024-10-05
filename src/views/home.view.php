<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include the style file -->
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/style.css">
    <?php
    // For icones
    require_once BASE_SRC . "/partials/icones.php"
    ?>
    <title>Document</title>
</head>

<body>
    this is home page !
    <!-- navigation bar -->
    <?php include_once __DIR__ . "/../partials/navbar.php" ?>

    <!-- Include the js file -->
    <script src="/js/home/home.js"></script>
</body>

</html>