
// loading screan



// Get the splash screen and main content elements
const splash = document.getElementById('splash');
const mainContent = document.getElementById('mainContent');
const video = document.getElementById('splashVideo');

// Event listener: When the video ends, fade out the splash screen
video.addEventListener('ended', () => {
  splash.classList.add('fade-out');
  setTimeout(() => {
    splash.style.display = 'none'; // Hide splash after animation
    mainContent.classList.add('show'); // Show main content
  }, 1000); // Matches fade-out duration
});

// Optional: Skip the splash screen on click/touch
splash.addEventListener('click', () => {
  splash.classList.add('fade-out');
  setTimeout(() => {
    splash.style.display = 'none';
    mainContent.classList.add('show');
  }, 1000);
});