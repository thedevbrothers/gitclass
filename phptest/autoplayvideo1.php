<!DOCTYPE html>
<html>
<head>
    <title>Auto Play Video with Sound</title>
</head>
<body>
    <button>play<button>
    <div id="videoContainer">
        <!-- Video element with autoplay, muted, and loop attributes -->
        <video id="video" autoplay muted loop>
        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
            <!-- Add additional video sources for compatibility with different browsers -->
        </video>

        <!-- Custom overlay for informing users and providing controls -->
        <div id="overlay" style="visibility: hidden;"> 
            <p>This website contains autoplaying videos with sound.</p>
            <p>Click the button below to play/pause the video:</p>
            <button id="toggleButton">Play/Pause</button>
        </div>
    </div>

    <script>

    const ctx = new(window.AudioContext || window.webkitAudioContext);
    const osc = ctx.createOscillator();
    osc.connect(ctx.destination);

    console.log(ctx.state);

    console.log(ctx);

    osc.start(0);
    osc.stop(2);

    const btn = document.querySelector('button');
    btn.addEventListener('click', ()=>{

        ctx.resume().then(()=>console.log(ctx.state))

    })



    // Check if the document has loaded completely
document.addEventListener("DOMContentLoaded", function () {
    // Get the video element, overlay, and toggle button
    const videoElement = document.getElementById("video");
    const overlay = document.getElementById("overlay");
    const toggleButton = document.getElementById("toggleButton");

    // Function to toggle the video playback on or off
    function toggleVideoPlayback() {
        if (videoElement.paused) {
            // Video is paused, so play it
            videoElement.play();
        } else {
            // Video is playing, so pause it
            videoElement.pause();
        }
    }

    // Function to hide the overlay and start video playback
    function hideOverlayAndPlay() {
        overlay.style.display = "none";
        videoElement.muted = false; 
        videoElement.play();
    }

    // Show the overlay when the document is loaded completely
    overlay.style.display = "hidden";

    // Attach the click event listener to the toggle button
    toggleButton.addEventListener("click", toggleVideoPlayback);

    // Start video playback when the user clicks the overlay
    overlay.addEventListener("click", hideOverlayAndPlay);
});



    </script>
</body>
</html>

