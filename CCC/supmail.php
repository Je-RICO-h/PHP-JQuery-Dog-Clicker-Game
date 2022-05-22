<?php

error_reporting(0);
ini_set('display_errors', 0);

$email = "erikpal566@gmail.com";
$text = $_POST["msg"];
$subject = "Idea";

mail($email,$subject,$text); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Pragma" content="no-cache">
    <meta name="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="Expires" content="0">
    <title>CDC-Community Dog Clicker</title>
    <link rel="icon" href="shibe.png">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="supmail.css" type="text/css">
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
        <div class="ttext">Thanks for improving the website!</div>
        <div class="buttons">
        <button onclick="window.location.href = 'index.php'">Back to Homepage</button>
            <button onclick="window.location.href = 'support.php'">Send another</button>
        </div>
    </section>
    
    <?php require 'footer.php';?>
        
    </body>    
</html>