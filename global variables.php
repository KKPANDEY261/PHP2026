<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['a'];
    $name=$_POST['b'];
    $address=$_POST['c'];

    //echo $USER;
    //echo $password;
    $con=new mysqli("localhost","root","","hh");
    $a=$con->query("insert into student values('$id','$name','$address')");
    
    if($a){
        echo "submited successfully";
    }
}
//print_r($_POST);
//print_r($_GET);
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
    id
    <input name="a">
    name
    <input name="b">
address 
   <input name="c">
    <button>submit</button>
</form>
</body>
</html>