<?php
// PHP function to process the parameter
function greetUser($name) {
    echo "Hello, " . $name ;
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo $_SERVER["REQUEST_METHOD"];
    //$username = $_POST['username'];
    //greetUser($username);
}
?>

<!-- HTML form that submits to the same page -->
<form method="post">
    <input type="text" name="username" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>