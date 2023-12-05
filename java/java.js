let playBtn = document.querySelectorAll('.paylist .box-container .box .play');
let musicplayer = document.querySelector('.music-player');
let musicAlbum = document.querySelector('.album');
console.log(musicAlbum)
let musicName = document.querySelector('.name');
let musicArtist = document.querySelector('.artist');
let music = document.querySelector('.music');


playBtn.forEach(play =>{
    console.log("estou aqui"+play)
    play.onclick = () =>{
        console.log("estou aqui")
        let src = play.getAttribute('data-src');

        let box = play.parentElement.parentElement;
        console.log("estou aqui"+box)
        let album = box.querySelector('.album');
        console.log("ggfg"+album)
        let name = box.querySelector('.name');
        let artist = box.querySelector('.artist');

        musicAlbum.src = album.src;
        console.log("sdfsdfd"+musicAlbum)
        musicName.innerHTML = name.innerHTML;
        musicArtist.innerHTML = artist.innerHTML;
        music.src = src;

        music.play();

        musicplayer.classList.add('active');
    }
});

document.querySelector('#close').onclick = () =>{
    musicplayer.classList.remove('active');
    music.pause();
}