<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine erste Website</title> 
</head>
  <body>
    <h1>Willkommen auf Tino und Reys Website!</h1> 
    
    <p>Dies ist meine erste Website, die ich mit HTML erstellt habe.</p>
    <ul>
      <li>Phil</li>
      <li>Joel</li>
      <li>Timo</li>
      <li>Robert</li>
    </ul>
      
      <img class="static" src="kekw.gif">
      <img class="active" src="kekwanimated.gif">
      <script>
          .static {
              position:absolute;
              background: white;
            }

            .static:hover {
              opacity:0;
           }
      </script>
<!--      
      <img id="kekw" src=https://media.tenor.com/ASGuOCPGrKEAAAAC/kekw-kek.png" alt="KEKW-Bild">

      <script>
      var img = document.getElementById("kekw");
        img.onmouseover = function() {
            this.src = "https://media.tenor.com/ASGuOCPGrKEAAAAC/kekw-kek.gif";
        }
        img.onmouseout = function() {
            this.src = "https://media.tenor.com/ASGuOCPGrKEAAAAC/kekw-kek.png";
        }
      </script>
      -->
      
      <audio id="radw" src="radwBOOST.mp3"></audio>
      <h1>Klicke für eine Überraschung bro</h1> 
<button id="Start" onclick="playRadw()">Start</button>
<button id="Stopp" onclick="pauseRadw()">Stopp</button>

<script>
  var x = document.getElementById("radw");
  function playRadw() {
    x.play();
  }
  function pauseRadw() {
    x.pause();
  }
</script>

<button class="BFortnite" onclick="playFortnite()">für Fortnite</button>
<audio id="Fortnite" src="fur-fortnite-meme_43PjrtIo.mp3"></audio>

<script>
  var y = document.getElementById("Fortnite");
  function playFortnite() {
    y.play();
  }
  
</script>
<img id="Pfeil" src="https://png.pngtree.com/png-clipart/20210311/big/pngtree-red-line-arrow-png-image_6028629.png" alt="bameninhong">

<img class="gif" id="Gomme" src="https://cdn.discordapp.com/emojis/1006900123692965958.gif?size=96&quality=lossless" width="200" height="100">

<script>
// Initialisieren Sie die Position des Gifs
var gif = document.getElementById("Gomme");
gif.style.left = "0px";
gif.style.top = "0px";

// Legen Sie die Geschwindigkeit fest, mit der das Gif wandert (in Pixel pro Sekunde)
var speed = 6;

// Legen Sie die Richtung fest, in die das Gif wandert (in Grad)
var direction = 45;

// Berechnen Sie die Bewegung in x- und y-Richtung
var x_move = Math.cos(direction * Math.PI / 180) * speed;
var y_move = Math.sin(direction * Math.PI / 180) * speed;

setInterval(function() {
  var left = parseInt(gif.style.left);
  var top = parseInt(gif.style.top);

  if (left + gif.width > window.innerWidth || left < 0) {
    x_move = -x_move;
  }
  if (top + gif.height > window.innerHeight || top < 0) {
    y_move = -y_move;
  }

  gif.style.left = (left + x_move) + "px";
  gif.style.top = (top + y_move) + "px";
}, 20);
</script>

<img id="vbucks" src="https://i1.sndcdn.com/artworks-000343031856-yhnq57-t500x500.jpg">

        <script>
          var button = document.getElementById("vbucks");
          button.onmouseover = function() {
            button.style.position = "absolute";
            button.style.left = Math.random() * (window.innerWidth - button.clientWidth) + "px";
            button.style.top = Math.random() * (window.innerHeight - button.clientHeight) + "px";
          }
        </script>
        <div id="counter">
          <?php include("counter.php"); ?>
        </div>
  </body>
  </html>
