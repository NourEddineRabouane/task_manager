<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoplay Video Example</title>
  
  <style>
    /* Reset browser defaults */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Fullscreen video container */
    .video-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: black;
      z-index: 10;
      overflow: hidden;
    }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Hide main content initially */
    .hidden {
      display: none;
    }

    /* Show main content when ready */
    .show {
      display: block;
    }
  </style>
</head>
<body>
  <!-- Fullscreen Video -->
  <div class="video-container">
    <video id="introVideo" autoplay muted playsinline>
    <source src="https://www.dropbox.com/scl/fi/kexaxrrknwcbqufv1egno/relo.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Main Content -->
  <div id="mainContent" class="hidden">
    <h1>Welcome to the Website</h1>
    <p>Thank you for visiting!</p>
  </div>

  <script>
    // Get elements
    const video = document.getElementById('introVideo');
    const mainContent = document.getElementById('mainContent');

    // When the video finishes, hide it and show the main content
    video.addEventListener('ended', () => {
      video.parentElement.style.display = 'none'; // Hide video container
      mainContent.classList.add('show'); // Show main content
    });
  </script>
</body>
</html>
