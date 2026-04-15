<?php
$stored_hash = '$2y$10$9WlM3k.5YTZW8nMUF2n0U./p5GcmcUTiR8D2BZZsigd';
$input_password = 'Karan@36';
$rehashed_password = password_hash($input_password, PASSWORD_DEFAULT);
if (password_verify($input_password, $stored_hash)) {
    echo "Password verified";
} else {
    echo "Incorrect password";
}
?>