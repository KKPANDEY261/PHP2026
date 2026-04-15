<?php
$conn=new mysqli("localhost","root","","hh");
$conn->query("create table if not exists students(id int,name varchar(20),address varchar(100),password varchar(200))");
$result=$conn->query('select *from students');

if($result->f> 0){
while($data=$result->fetch_assoc()){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
     <tr>
      <td>SR.NO</td>
      <td>NAME</td>
      <td>ADDRESS</td>
      <td>PASSWORD</td>   
</tr>
<tr>
    <td><?php echo $data['id'] ?></td>
    <td><?php echo $data['name'] ?></td>
    <td><?php echo $data['address'] ?></td>
    <td><?php echo $data['password'] ?></td>
      
</tr>
<?php
}
} else{
    echo "no data found";
}
?>

</table>
</body>
</html>