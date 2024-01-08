const audio = document.getElementById("audio");
// const playPauseButton = document.getElementById("play-pause-button");
const playButton = document.getElementById("play-button");
const pauseButton = document.getElementById("pause-button");
const volumeControl = document.getElementById("volume-control");
const progressBar = document.getElementById("progress-bar");

let isPlaying = false;

playButton.addEventListener('click', () => {
    if (isPlaying) {
        audio.play();
        
    } 

pauseButton.addEventListener('click', () => {
    if (!isPlaying) {
        audio.pause();
    }
})
});


// playPauseButton.addEventListener("click", () => {
//     if (isPlaying) {
//         audio.pause();
//         playPauseButton.textContent = "Play";
//     } else {
//         audio.play();
//         playPauseButton.textContent = "Pause";
//     }
//     isPlaying = !isPlaying;
// });

// volumeControl.addEventListener("input", () => {
//     audio.volume = volumeControl.value;
// });

