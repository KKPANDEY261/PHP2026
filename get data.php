<?php
$conn=new mysqli("localhost","root","","hh");
$result=$conn->query('select *from students');




 
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
    <th>ID</th>
    <th>name</th>
    <th>address</th>
    <th>password</th>
</tr>
<?php
if($result->num_rows >0){
    while($data=$result->fetch_assoc()){
        ?>
<tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['password']; ?></td>
    
    
</tr>





<?php
}


}else {
    echo "data not found";
}
?>
</table>

</body>
</html>