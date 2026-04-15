<?php
$file=fopen("my_data/new.txt","w");
if ($file){
    fwrite($file,"hello this is Nsti howrah \n");
    fwrite($file,"this is csa trade");
    fclose($file);
    echo "file is created successfully";
}
?>