<?php

error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST["message"])) {
$email= "erikpal566@gmail.com";
$subject= "BugReport";
$message= $_POST["message"];
$headers= $_POST["e-mail"];
if($headers == "" && $headers == " ");
  $headers = "";

mail($email,$subject,$message,$headers);
}
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDC-CommunityDogClicker-Report</title>
    <link rel="icon" href="shibe.png">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="answer.css" type="text/css">
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
    <p>Thanks for helping making this website better!</p>
    <button onclick="window.location.href ='index.html'" title="Back to homepage">Back to homepage</button>
    <button onclick="window.location.href ='report.php'" title="Send another">Send another</button>
    <p>Or...</p>
</section>    
    
<?php require 'footer.php'; ?>      
    
</body>      
</html>