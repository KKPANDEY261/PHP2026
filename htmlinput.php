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
        <input name="id" placeholder="enter your id"><br>
        name
        <input name="name" placeholder="enter your name"><br>
        address
        <input name="address" placeholder="enter your address"><br>
        <button>submit</button>
</form>
<?php
$conn=new mysqli("localhost","root","","hh");
if($conn){
if($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
   $a= $conn->query("insert into student values('$id','$name','$address')");
   if ($a){
    echo "data inserted successfully";
   }
}
}
?>
</body>
</html>