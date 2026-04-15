<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body><div class="container mt-5">
<?php
$con=mysqli_connect('localhost','root','','hello');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from csa where `sl.no.`=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo " Record successfully deleted";
       header('location:getdata.php');
    }
        else{
            die(mysqli_error($con));
        }
}

?>
<br>
<button class="btn btn-primary"><a href="javascript:history.back()" class="text-light"  >Back</a></button>
</div>
</body>
</html>