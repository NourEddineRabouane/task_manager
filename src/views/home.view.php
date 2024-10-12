<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Include the style file -->
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/home/video.css">
    <?php
    // For icones

    require_once BASE_SRC . "/partials/icones.php"
    ?>

    <title>Document</title>
</head>

<body>
    <?php include_once __DIR__ . "/../partials/navbar.php" ?>

    <div id="splash" class="splash-screen">
        <video id="splashVideo" autoplay muted playsinline>
            <source src="https://res.cloudinary.com/dd04rtxkp/video/upload/v1728764589/WhatsApp_Video_2024-10-12_at_21.18.55_b234a9e1_yrglvk.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Main Content of the Website -->
    <div id="mainContent" class="hidden">
        <h1>Welcome to Your Website!</h1>
        <p>This is the home page content.</p>
    </div>




    <script src="/js/home/video.js"></script>
</body>

</html>