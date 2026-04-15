<?php
$file="my_data/new.txt";
if ($file){
       $a=file($file);
       echo implode('<br>',$a);

}

?>