
let music = document.getElementById('audio');
let buttonPlay = document.getElementById('play');
let barraProgress = document.getElementById('barra-progress');
let title = document.getElementById('title');
/*
let ficheiro = document.getElementById('ficheiro');
ficheiro.addEventListener('click', ficheiroValor);
*/
let directory = "mp3/";
let file = "";

let onOf = false;

buttonPlay.addEventListener('click', function(){
   
    
    
    if(onOf == false){play(); buttonPlay.innerText = "pause"; onOf = true;} else {pause(); onOf=false; buttonPlay.innerText="play_arrow"}

})






function play(){
    audio.play()
    console.log(audio.duration/60);
    console.log(audio.currentTime/60);

}
function pause(){
    audio.pause();
}

function progress(){
    let percentualAudio = (audio.currentTime/60*100)/(audio.duration/60);
    let percentualAudioString = "width:"+percentualAudio+"%";
    barraProgress.style = percentualAudioString;
    


}

function ficheiroValor(name){
    file = name;
    music.src=directory+file;
    onOf=true;
    pause();
    play();
    buttonPlay.innerText="pause";
    title.innerText = name;
}

setInterval(progress, 1000);
console.log(filesMp3);