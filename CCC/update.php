<?php
        $file = fopen("counter.txt", "r") or die ("Not Working...");
      $count = fread($file,filesize("counter.txt"));
      $count += 1;
       fclose($file);
    $myfile = fopen("counter.txt", "w") or die("Not working...");
        fwrite($myfile, $count);
        fclose($myfile);
?>