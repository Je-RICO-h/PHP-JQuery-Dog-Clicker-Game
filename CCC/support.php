<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-content">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Expires" content="0">
    <title>CDC-Community Dog Clicker!</title>
    <link rel="icon" href="shibe.png">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="support.css" type="text/css">
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
    <script src="jquery-3.3.1.js"></script>
    <script src="script.js"></script>
    <script> 
        function bugfix() {
    window.location.href = "report.php"; }
    </script>
</head>
    
<body onload="clock()">
 <div id="background"></div>   
    
<?php require 'header.php';?>
    
<?php require 'navaside.php';?>
    
<section>
    <div class="leftplace"><p>Your ideas:</p></div>
    <form name="supsend" method="post" action="<?php echo htmlspecialchars('supmail.php')?>" onsubmit="return checks()">
        <textarea name="msg" type="text" minlength="5" maxlength="3000" placeholder="Min 5 char!"></textarea>
        <input type="submit" value="Send">
    </form>
    <div class="rightplace"><p>Max 3000 char!</p></div>
</section>

<?php require 'footer.php';?>    
    
</body>    
    
</html>