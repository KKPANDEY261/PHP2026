<?php

$pass="pandey";
$enpass=hash('sha256',$pass);
$enpass=password_hash($pass,PASSWORD_BCRYPT);

$conn->query("insert into server values('$name','$enpass')");








$username=$_POST['username'];
$password=$_POST['password'];

$pass1=$conn->query('select password from server where username=$username');
 if (hash_equals($pass1,hash('sha256',$password))){

 }
if (password_verify($password,$pass1)){
header('location:index.php')
 }
?>
