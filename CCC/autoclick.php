<?php
 include "update.php";
$count+= 1;
$file = fopen("counter.txt","w") or die ("Can't open file");
fwrite($file, $count);
fclose($file);
?>