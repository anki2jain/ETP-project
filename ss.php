<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <!-- <title>Document</title> -->
    <script>
function cancelFullScreen() {
    if (document.cancelFullScreen) {
        document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
    } else if (document.msCancelFullScreen) {
        document.msCancelFullScreen();
    }
    link = document.getElementById("container");
    link.removeAttribute("onclick");
    link.setAttribute("onclick", "fullScreen(this)");
}

function fullScreen(element) {
    if (element.requestFullScreen) {
        element.requestFullScreen();
    } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    }
    link = document.getElementById("container");
    link.removeAttribute("onclick");
    link.setAttribute("onclick", "cancelFullScreen()");
}

window.onload = function() {
  imgs = document.getElementById('slideshow').children;
  interval = 8000;
  currentPic = 0;
  imgs[currentPic].style.webkitAnimation = 'fadey '+interval+'ms';
  imgs[currentPic].style.animation = 'fadey '+interval+'ms';
  var infiniteLoop = setInterval(function(){
    imgs[currentPic].removeAttribute('style');
    if ( currentPic == imgs.length - 1) { currentPic = 0; } else { currentPic++; }
    imgs[currentPic].style.webkitAnimation = 'fadey '+interval+'ms';
    imgs[currentPic].style.animation = 'fadey '+interval+'ms';
  }, interval);
}

    </script>

    <style>
    @keyframes fadey { 
0% { opacity: 0; }
15% { opacity: 1; }
85% { opacity: 1; }
100% { opacity: 0; }
}

figure#slideshow { 
  width: 60%; 
  margin: 0 auto; 
  position: relative; 
  border: 1px solid #fff;
  cursor: pointer;
}
figure#slideshow img { 
  position: absolute; 
  left: 0; top: 0; 
  width: 100%; height: auto; 
  opacity: 0; 
}
figure#slideshow img:first-child { position: relative; }

#container:fullscreen { 
  display: flex; 
  justify-content: center; 
  align-items: center; 
  background: #fff; 
}
#container:-moz-full-screen figure, #container:-ms-full-screen figure, #container:-webkit-fullscreen figure, #container:fullscreen figure { 
  width: 100%;
  margin: 0 auto;
  background: #fff; 
}
:-webkit-full-screen { 
  width: 100%; height: 100%; 
}
*:-moz-full-screen { 
  background: #fff; 
}
*:-webkit-full-screen { 
  background: #fff; 
}
    </style>
</head>
<body>
<div class="pt-5 mt-5">
<figure id="container" onclick="fullScreen(this)">
  <figure id="slideshow">
    <img src="1.jpg" alt>
    
    <img src="2.jpg" alt>
    <img src="3.jpg" alt>
    <img src="4.jpg" alt>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/happy-bot-tinkerbot.jpg" alt>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/sgt-swift-tinkerbot.jpg" alt>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/xf-3-fandicaff-tinkerbot.jpg" alt>
  </figure>
</figure>
</div><?php
    // echo '<div class="mt-4">';
include 'ss.php';
// echo '</div>';
?>
</body>
</html>