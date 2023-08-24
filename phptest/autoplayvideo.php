<!DOCTYPE html>
<html>
<head>
    <title>Auto Play Video with Audio</title>
</head>
<body>
    <video id="video" autoplay muted loop>
        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
        <!-- Add additional video sources for compatibility with different browsers -->
    </video>

    <button id="toggleButton">Toggle Playback</button>

    <script>



        // Check if the document has loaded completely
document.addEventListener("DOMContentLoaded", function () {
    // Get the video element and the toggle button
    const videoElement = document.getElementById("video");
    const toggleButton = document.getElementById("toggleButton");

    // Function to toggle the video playback on or off
    function toggleVideoPlayback() {
        if (videoElement.paused) {
            // Video is paused, so play it
            videoElement.play();
            videoElement.muted = false;
        } else {
            // Video is playing, so pause it
            videoElement.pause();
        }
    }

    // Attach the click event listener to the toggle button
    toggleButton.addEventListener("click", toggleVideoPlayback);
});

// window.onload = function(){
//     var button = document.getElementById('toggleButton');
//     setInterval(function(){
//         button.click();
//     },1000);  // this will make it click again every 1000 miliseconds
// };

    </script>
</body>
</html>
