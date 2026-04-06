<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
          
           $enpassword=hash('SHA256',$password);
           echo $enpassword;



     $con=new mysqli("localhost","root","","hh");
     $con->query('create table server(name varchar(20),email varchar(20),username varchar(20),password varchar(500))');
     $con->query("insert into server values('$name','$email','$username','$enpassword')");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input name="name" placeholder="name">
        <input name="email" placeholder="email">
        <input name="username" placeholder="username">
        <input name="password" placeholder="password">
        <button>register</button>
</form>
</body>
</html>