<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Cache-Control" content="max-age=0">
    <meta http-equiv="Expires" content="0">
    <title>CDC-Community Dog Clicker!</title>
    <link rel="icon" href="shibe.png">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="index.css" type="text/css">
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
    <script src="jquery-3.3.1.js"></script>
    <script src="script.js"></script>
</head>
    
<body onload="clock(); serverrequest(); checking(); achivstart(); rewardcheck()">

<div id="background"></div>       
    
<header>
  <div class="logo"><img src="logo.png" alt=" "></div>
    <div class="clock"></div>
    <button type="button" class="help" title="Experienced bug ? Click here!" onclick='window.location.href = "report.php"'><a>Report Bug</a></button>
</header>    
    
<nav>
    <a href="index.php">Homepage</a>
    <a href="achievment.php">Achievements</a>
    <a href="changelog.php">Changelog</a>
    <marquee><a href="support.php">Have an idea how to improve webpage? Write it here!</a></marquee>
</nav>    

<section>
    <div class="clicker"><button onclick="updateing()">Click me!!!</button>
    <p>Counter: </p><p id="count"></p></div>
</section>    
    
<aside>
    <form method="post" action="<?php echo htmlspecialchars("chat.php");?>">
        <input type="submit" value="Send">
        <input type="text" name="chatinput" maxlenght="100" placeholder="Type here">
    </form>
</aside>    
    
<div class="upgrades">    
    <div class="title">Upgrades</div>
    <div class="autoclick">
        <div class="picture"><img src="cursor.png" alt="cursor"><div class="a_title">Autoclick</div></div>
        <div class="text">Gives You +1 point every 1 minute,Upgrading it decrease it by 1 second(Min 10 second!)</div>
        <div class="button"><button onclick="Autorequest()">10k points</button></div>   
    </div>
</div>    
    
    <div class="alert">
    <p class="achiv">Achievement unlocked: Click 10000 times!</p>
    </div>
    
<footer>
    <small>&copy;RicoPrograms 2017-2018 (BETA)</small>
    <small>Ver 1.02</small>
</footer>    
    
</body>    
</html>