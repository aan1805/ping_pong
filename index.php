<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1,user-scallable=no">

<link rel='stylesheet' href='lol.css' />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<title>??Ping pong[ ?? Game ]</title>

<script type="text/javascript" src="main.js"></script> 

<link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Sarabun" rel="stylesheet">

</head>
<body onload="document.getElementById('container').style.visibility='hidden',document.getElementsByClassName('tab')[0].style.animation='pop .27s ease'" 
>

<canvas id="canvas"></canvas> 

<!— Loader starts —>
<div id="container">
<div id="loader" >
<span></span>
<span></span>
<span></span>
<span></span>
</div>


<div id="load">Loading...</div>
</div>
<!— Loader ends —>

<div class="tab">
<div id="logo" >
<img src="https://dl.dropbox.com/s/vx5k1c8spw8tbkt/ping_pong_logo.png?dl=0" alt="Logo" /> <h3>Ping Pong</h3>
</div>

<div id="info"><b>&#9432</b> First player to score 10 points wins .</div>

<div class="level">

<div id="easy" onclick="eas()">
Beginner
</div>
<div id="hard" onclick="har()">
Medium
</div>
<div id="impossible" onclick="imp()">
<i class="fas fa-skull"></i> Impossible <i class="fas fa-skull"></i>
</div>
</div>
</div>

<div id="status">
<center>
<div id="result" >
You Win 
</div> 
</center>
<center>
<button onclick="again()">Play Again</button> 
</center>

</div>

<!— To get the clicking sound —> 
<audio id="music" autoplay loop>
<source src="https://dl-web.dropbox.com/s/9smc0vzt2oe6jfl/Ping%20Pong%20music%202.mp3?dl=0" 
type = "audio/mp3">

</audio> 

<audio id="win" autoplay >
<source src="https://dl-web.dropbox.com/s/rp61o4fyqrr4rzx/victory%20%20sound.mp3?dl=0" 
type = "audio/mp3">

</audio> 

<audio id="lose" autoplay >
<source src="https://dl-web.dropbox.com/s/v92i14096c2syxg/Lose%20Game%20.mp3?dl=0" 
type = "audio/mp3">

</audio> 

</body>
</html>
