 <?php
// Establish connection to MySQL database
$con = mysqli_connect('localhost', 'root', '', 'hello');

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Fetch form data
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['confirm_password'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $zipcode=$_POST['zip'];
    $phone_number=$_POST['phone'];
    
    
    $check_query = mysqli_query($con, "SELECT * FROM csa WHERE name='$name'");
    if(mysqli_num_rows($check_query) > 0){
        echo "Username already exists";
    } else {
        
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $cpassword=password_hash($cpassword,PASSWORD_DEFAULT);
        
        // Insert user data into the database
        $insert_query = "INSERT INTO csa (name, email, password, confirm_password, dob, gender, address, city, state, country, zip_code, phone_number)
                         VALUES ('$name', '$email', '$password_hash', '$cpassword', '$dob', '$gender', '$address', '$city', '$state', '$country', '$zipcode', '$phone_number')";
        if(mysqli_query($con, $insert_query)){
            echo "Successfully submitted";
          //  header('location:getdata.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    // Close database connection
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional CSS styles can be added here */
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="mt-5">Registration Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            
            <div class="form-group">
                <label>Gender:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                    <label class="form-check-label" for="other">Other</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4" cols="50"></textarea>
            </div>
            
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
            
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>
            
            <div class="form-group">
                <label for="zip">Zip Code:</label>
                <input type="text" class="form-control" id="zip" name="zip">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
