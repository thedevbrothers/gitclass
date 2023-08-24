<!DOCTYPE html>
<html>
<head>
    <title>Auto Audio on Video Reel</title>
    <style>

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f1f1f1;
}

video {
    width: 400px;
    height: 300px;
    margin: 10px;
    border: 2px solid #ccc;
    background-color: #000;
}
    </style>
</head>

<body>
    <video id="video1" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" controls></video>
    <video id="video2" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" controls></video>
    <!-- Add more video elements as needed -->
    <script>
function greet(name, age) {
  console.log('Hello, ' + name + '! You are ' + age + ' years old.');
}

setTimeout(greet, 2000, 'John', 30);

window.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('video'); // Get all video elements
    
    console.log(videos);

    videos.forEach((video, index) => {
        video.addEventListener('ended', () => {
            const nextIndex = (index + 1) % videos.length; // Calculate the index of the next video

        console.warn(video);
            // Pause current video and play the next one
            video.pause();
            video.currentTime = 0;
            videos[nextIndex].play();
        });

        video.addEventListener('canplay', () => {
            video.play(); // Play the video when it's ready
        });
    });
});

    </script>
</body>
</html>
