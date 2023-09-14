var playlist = [
  { name: '20 canciondes de merengue', source: 'merengue.mp3' },
  { name: '20 canciones de diciembre', source: 'diciembre.mp3' },
  { name: '20 de vallenato', source: 'Los 20 Vallenatos Más Escuchados.mp3' },
  { name: '20 de popular', source: 'popular.mp3' },
  { name: '20 de salsa', source: 'rumba.mp3' },
  { name: '20  de variado', source: 'mesclado.mp3' },
  
  // Agrega los nombres y archivos de audio restantes aquí
  // ...
  { name: 'tecnocumbias', source: 'tecnoumbia.mp3' }
];

var currentSongIndex = 0;
var audioPlayer = document.getElementById("audioPlayer");

function playNextSong() {
  currentSongIndex++;
  if (currentSongIndex >= playlist.length) {
    currentSongIndex = 0;
  }
  var nextSong = playlist[currentSongIndex];
  playSong(nextSong.source);
}

function playSong(source) {
  audioPlayer.src = source;
  audioPlayer.load();
  audioPlayer.play();
}

audioPlayer.addEventListener("ended", playNextSong);

// Generar la lista de reproducción dinámicamente
var playlistElement = document.getElementById("playlist");
for (var i = 0; i < playlist.length; i++) {
  var song = playlist[i];
  var listItem = document.createElement("li");
  var link = document.createElement("a");
  link.href = "#";
  link.textContent = song.name;
  link.setAttribute("data-source", song.source);
  link.addEventListener("click", function(event) {
    event.preventDefault();
    var songSource = this.getAttribute("data-source");
    playSong(songSource);
  });
  listItem.appendChild(link);
  playlistElement.appendChild(listItem);
}

// Reproducir la primera canción al cargar la página
playSong(playlist[currentSongIndex].source);
