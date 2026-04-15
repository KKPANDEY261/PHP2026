<?php
$con=mysqli_connect('localhost','root','','hello');
$query="select * from csa";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data in database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container,card mt-5">
     <div class="card mt-5,card-header">
     <div class="card-header ">
        <h2 class="display-6 text-center">Fatech data from database </h2>
     </div>
     <div class="card-body">
      <div class="table-responsive">
       <table class="table table-bordered text-center text-white">
        <tr style="white-space: nowrap" class="bg-dark text-white">
        <td>sl</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Confirm Password</td>
            <td>Date of birth</td>
            <td>Gender</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Country</td>
            <td>Zip code</td>
            <td>Phone Number</td>
            <td>Operation</td>
         </tr>

       <?php
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr style="white-space: nowrap">
        <td><?php echo $row['sl.no.'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['password'];?></td>
        <td><?php echo $row['confirm_password'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['state'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['zip_code'];?></td>
        <td><?php echo $row['phone_number'];?></td>
        <td>
                <button class="btn btn-primary"><a href="update.php?updateid='<?php echo $row['sl.no.'];?>'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='<?php echo $row['sl.no.'];?>'" class="text-light">Delete</a></button>
            </td>
      </tr>
      <?php
      }
      ?>
      </table>


    </div>
    </div>
    </div>
  </div>
    
</body>
</html>