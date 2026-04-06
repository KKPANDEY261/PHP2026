<?php
$password = "karan";

// 1. PASSWORD_DEFAULT
$hash1 = password_hash($password, PASSWORD_DEFAULT);
echo "PASSWORD_DEFAULT: " . $hash1 . "\n\n";

// 2. PASSWORD_BCRYPT
$hash2 = password_hash($password, PASSWORD_BCRYPT);
echo "PASSWORD_BCRYPT: " . $hash2 . "\n\n";

// 3. PASSWORD_ARGON2I (PHP 7.2+)
if (defined('PASSWORD_ARGON2I')) {
    $hash3 = password_hash($password, PASSWORD_ARGON2I);
    echo "PASSWORD_ARGON2I: " . $hash3 . "\n\n";
}

// 4. PASSWORD_ARGON2ID (PHP 7.3+)
if (defined('PASSWORD_ARGON2ID')) {
    $hash4 = password_hash($password, PASSWORD_ARGON2ID);
    echo "PASSWORD_ARGON2ID: " . $hash4 . "\n\n";
}

// password verifition
if (password_verify($password, $hash4)) {
    echo "password is correct
} else {
    echo "password is incorrect";
}
?>