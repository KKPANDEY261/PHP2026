<?php


$file="my_data/new.txt";
if ($file){
    
     $a=file($file);
     print_r($a);
     echo implode("<br>",$a);
}
//     
//    
//}
//echo "read file using fread()";
//
//$f=fopen("my_data/new.txt",'r');
//if($f){
//    $b=fread($f,filesize("my_data/new.txt"));
//    fclose($f);
//    echo nl2br($b);
//    //echo $b;
//}
//$a="my_data/new.txt";
//if(file_exists($a)){
//    echo " file existed";
//}else{
//    echo "file not existed";
//}
//$b=filesize($a);
//echo $b;
 $c=fopen("my_data/new.txt","a");
 if ($c){
    fwrite($c,"\n welcome");
    fclose($c);
 }



?>