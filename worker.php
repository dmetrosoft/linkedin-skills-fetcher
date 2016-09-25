<?php
 $myfile = fopen("worker.txt", "a+") or die("Unable to open file!");
 $txt=$_POST["worker"];
fwrite($myfile, $txt."\n");
fclose($myfile);
?>



