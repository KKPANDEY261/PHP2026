<?php
$a=new mysqli("localhost","root","","hh");
//$a->query("create database hello");
//$b="create database hh";
//$a->query($b);
//$b="use hh";
//$a->query($b);
$a->query("create table student(id int,name varchar(20),address varchar(100))");

?>