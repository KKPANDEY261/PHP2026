
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$password=$_POST['password'];

$enpassword=hash('sha256',$password);

$conn=new mysqli("localhost","root","","hh");
$sql=$conn->query("insert into students values ('$id','$name','$address','$enpassword')");

if ($sql){
    header('location:get data.php');
}



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
        <input name="id" placeholder="enter your id">
        <input name="name" placeholder="enter your name">
        <input name="address" placeholder="enter your address">
        <input name="password" placeholder="enter your password">
        <button>submit</button>
</form>

</body>
</html>