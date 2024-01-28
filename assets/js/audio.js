function toggleAudio() {
    var audio = document.getElementById('audioPlayer');
    var playButton = document.querySelector('.btn-play');

    if (audio.paused) {
        audio.play();
        playButton.classList.add('playing');  
    } else {
        audio.pause();
        playButton.classList.remove('playing');
    }
}