<?php
#open file
$file=fopen('trainee.txt','a');
#write content
fwrite($file,$_POST['uname'].','.$_POST['upass']."\n");
#close file
fclose($file);
#redirect
header("Location: http://localhost/Day2/List.php");