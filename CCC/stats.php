<?php
$file = fopen("statuses.txt","w") or die("Can't be opened");
$x = file_get_contents("php://input");
fwrite($file,$x);
fclose($file);
?>