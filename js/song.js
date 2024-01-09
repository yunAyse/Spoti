// const audio = document.getElementById("audio");
// // const playPauseButton = document.getElementById("play-pause-button");
// const playButton = document.getElementById("play-button");
// const pauseButton = document.getElementById("pause-button");
// const volumeControl = document.getElementById("volume-control");
// const progressBar = document.getElementById("progress-bar");

// let isPlaying = false;

// playButton.addEventListener('click', () => {
//     if (isPlaying) {
//         audio.play();
        
//     } 

// pauseButton.addEventListener('click', () => {
//     if (!isPlaying) {
//         audio.pause();
//     }
// })
// });


// playPauseButton.addEventListener('click', () => {
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


const shuffle = document.querySelector('.me-2'); 

shuffle.addEventListener("click", (event) => {

    event.shuffle = (Math.floor(Math.random()*4))

});





console.log(shuffle);


// randomBtn.onclick = function (e) {
//     _this.isRandom = !_this.isRandom;
//     _this.setConfig("isRandom", _this.isRandom);
//     randomBtn.classList.toggle("active", _this.isRandom);
//   };

// function getRandom(min, max) {
//     min = Math.ceil(min);
//     max = Math.floor(max);
//     return Math.floor(Math.random() * (max - min + 1)) + min;
//   }

