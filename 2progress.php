<?php
// Step 1: Variable
$name = "Ashutosh Kumar";

// Step 2: Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Good Humman Being</title>
</head>
<body>

<h2> Good Luck Ashutosh Kumar</h2>

<!-- Step 3: Form -->
<form method="post">
    Enter your name: 
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<br>

<?php
// Step 4: Output
echo "Hello, " . $name . "<br><br>";

// Step 5: Condition
if ($name == "Guest") {
    echo "Please enter your name to start progress.<br><br>";
} else {
    echo "Great! Let's see your progress:<br><br>";

    // Step 6: Loop (Progress bar style)
    for ($i = 1; $i <= 5; $i++) {
        echo "Step $i completed ✅<br>";
    }
}
?>

</body>
</html>