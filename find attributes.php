<?php

$con=new mysqli("localhost","root","","hh");
$a=$con->query('select * from students');
$b=$a->fetch_fields();
foreach ($b as $c){
    echo $c->name"<br>";
}
?>