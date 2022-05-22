<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDC-Community Dog Clicker-Report</title>
    <link rel="icon" href="shibe.png">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="report.css" type="text/css">
    <script src="jquery-3.3.1.js"></script>
    <script src="script.js"></script>
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
    <script> 
        function bugfix() {
    window.location.href = "report.php"; }
    </script>
</head>
    
<body onload="clock()">

<div id="background"></div>    
    
<?php require 'header.php'; ?>

<?php require 'navaside.php'; ?>

<section>
    <div class="leftside">
        <h1>Email:</h1>
        <h1>Text:</h1>
    </div>
    <div class="rightside">
    <h1>*Optional (If you except respond!)</h1>
    <h1>*Required (min 5 letter!)</h1>
    </div>
<form method="post" action="<?php echo htmlspecialchars("mail.php");?>">  
    <p>Only Write if you really experienced a bug!!!</p>
     <p>Fill everything in!</p>
    <input class="mail" type="email" name="e-mail" placeholder="E-mail" maxlength="70">
    <textarea class="text" name="message" rows="12" cols="50" maxlength="600" required></textarea>
    <input class="sending" type="submit" value="Send" disabled>       
    </form>
    
</section>    
    
<?php require 'footer.php'; ?>    
 
<script>
function eventlist() {
    document.getElementsByClassName("text")[0].addEventListener('keydown', testing);
}

function testing() {
    var check = document.getElementsByClassName("text")[0];
    var x = check.value.length;
    if(x<5){
        document.getElementsByClassName("sending")[0].disabled = true;
    } else { 
        document.getElementsByClassName("sending")[0].disabled = false;
    }
}
 eventlist();
</script>  
    
</body>      
</html>