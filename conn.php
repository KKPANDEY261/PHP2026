<?php
//$conn=new mysqli("localhost","root","","hello");

//$conn->query('create table table_name (id int,name varchar(20),address varchar(100))');

$server="localhost";
$username="root";
$password="";
$databasename="hello";
$conn=new mysqli($server,$username,$password,$databasename);
print_r($conn);
if ($conn){
    echo " login successfully";
}

?>