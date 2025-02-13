<?php
#mode
#r--->file must be exsist--->open stream 
#w--->file exsist(clear),not exs. will create
#r+====>file must exsiste,read & write
#x
#t
#open file
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$content=file('data.txt');
var_dump($content);
// #open
// $f=fopen('data.txt','r');
// #read

// // while(!feof($f))
// // {
// //     $content=fgets($f,);
// //     echo $content;
// // }
//   $content=fgetss($f,);
//     var_dump( $content);
// // $content=fgetcsv($f,30,' ');
// var_dump($content);
// // $content=fgets($f,3);
// // var_dump($content);
// // $content=fgets($f,);
// // var_dump($content);
// #close
// fclose($f);
// file_put_contents('data.txt',"mai\nsara\nmaha");
// $f=fopen('data.txt','a');
// fseek(4);
// fwrite($f,'mai');
// fclose($f);
// #open stream
// $file=fopen('data.txt','r+');
// #read
// $content=fgets($file,sizeof($file));
// var_dump($content);
// $content=fgets($file,sizeof($file));
// var_dump($content);
// #close
// fclose($file);
// #clear content file
// $file=fopen('data.txt','w');
// fwrite($file,'ghada');
// fwrite($file,'maha');
// // $names=['gada','maha','diab'];
// // foreach ($names as $name)
// // {
    
// //     fwrite($file,$name);
// // }

// var_dump($file);
// #close file
// fclose($file);

