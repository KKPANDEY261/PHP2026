<?php
// Database connection
$conn = new mysqli("localhost", "username", "password", "database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    
    // Hash the password with SHA-256
    $hashed_password = hash('sha256', $password);
    
    // Insert into database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>