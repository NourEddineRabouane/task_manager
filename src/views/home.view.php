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
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Hides scrollbar */
        }
        video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%; /* Adjust as needed */
            height: auto; /* Maintain aspect ratio */
            z-index: -1; /* Send to back */
        }
        .content {
            position: relative;
            z-index: 1; /* Bring content to front */
            color: white; /* Adjust based on your video */
            text-align: center;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>

<body>


  
    <!-- navigation bar -->
    <?php include_once __DIR__ . "/../partials/navbar.php" ?>
    
    <!-- Include the js file -->
    <video autoplay muted>
        <source src="C:\Users\abdoa\Downloads\relo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content">
        <h1>Welcome to My Page!</h1>
        <p>This is some content overlaying the video.</p>
    </div>

    <script>
        window.onload = function() {
            const video = document.querySelector('video');
            video.play();
        };
    </script>
    <script src="/js/home/home.js"></script>
</body>

</html>