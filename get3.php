<?php
$conn=new mysqli("localhost","root","","hh");
$result=$conn->query('select *from students');
print_r($result);
$data=$result->fetch_assoc();
print_r($data);
?>