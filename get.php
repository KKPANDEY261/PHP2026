<?php

print_r($_GET);
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <input name="id" placeholder="userid">
    <input name="name" placeholder="username">
    <input name="address" placeholder="address">
    <button>GET</button>
</form>
<form method="POST">
    <input name="id" placeholder="userid">
    <input name="name" placeholder="username">
    <input name="address" placeholder="address">
    <button>POST</button>
</form>


</body>
</html>