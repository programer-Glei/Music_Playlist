let playBtn = document.querySelectorAll('.paylist .box-container .box .play');

let musicplayer = document.querySelector('.music-player');
let musicAlbum = document.querySelector('.album');
let musicName = document.querySelector('.name');
let musicArtist = document.querySelector('.artist');
let music = document.querySelector('.music');


playBtn.forEach(play =>{
    
    play.onclick = () =>{
        let src = play.getAttribute('data-src');
        let box = play.parentElement.parentElement;
        let album = box.querySelector('.album');
        let name = box.querySelector('.name');
        let artist = box.querySelector('.artist');

        musicAlbum.src = album.src;
        musicName.innerHTML = name.innerHTML;
        music.src = src;

        music.play();

        musicplayer.classList.add('active');
    }
})