<?php

include "update.php";
if($count >= 10000) {
$file = fopen("counter.txt", "w") or die ("Can't open file");
$count -= 10000;
fwrite($file, $count);
fclose($file); 

$check = fopen("check.txt","r") or die ("Can't open file");
$checking = fread($check,filesize("check.txt"));
fclose($check);

  if($checking == 0){
    $file = fopen("check.txt","w") or die ("Can't open file");
      $x = 1;
    fwrite($file, $x);
      fclose($file);
  } else {
      return;
  }
} else {
    return;
}
?>