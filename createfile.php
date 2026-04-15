<?php

$file=fopen("my_data/new.txt","w");
if ($file){
    fwrite($file,"this is nsti howrah \n welcome to csa trade");
    fclose($file);
    echo "file is created successfully";
}




?>