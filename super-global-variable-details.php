<?php
//$_SERVER
//$_SERVER["REQUEST_METHOD"]     // GET, POST, PUT, DELETE
//$_SERVER["REMOTE_ADDR"]        // USER IP: 192.168.1.1
//$_SERVER["SERVER_NAME"]        // SERVER NAME: localhost
//$_SERVER["SCRIPT_NAME"]        // FILE NAME: /index.php
//$_SERVER["HTTP_USER_AGENT"]    // BROWSER DETAILS
//$_SERVER["HTTP_REFERER"]       // WHERE DID IT COME FROM: https://google.com
//$_SERVER["QUERY_STRING"]       // URL parameters: id=5&name=raj

//$_SERVER = array(
//    'HTTP_HOST' => 'localhost',
//    'HTTP_USER_AGENT' => 'Mozilla/5.0 (Windows NT 10.0; Win64; //x64) AppleWebKit/537.36',
//    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application///xml;q=0.9,*/*;q=0.8',
//    'HTTP_ACCEPT_LANGUAGE' => 'en-US,en;q=0.5',
//    'HTTP_ACCEPT_ENCODING' => 'gzip, deflate, br',
//    'HTTP_CONNECTION' => 'keep-alive',
//    'REQUEST_METHOD' => 'POST',
//    'REQUEST_TIME' => '1640995200',
//    'REQUEST_URI' => '/api/user/profile.php',
//    'QUERY_STRING' => 'id=101&type=edit',
//    'REMOTE_ADDR' => '192.168.1.100',
//    'REMOTE_PORT' => '54321',
//    'SERVER_ADDR' => '192.168.1.10',
//    'SERVER_PORT' => '80',
//    'SERVER_NAME' => 'example.com',
//    'SERVER_PROTOCOL' => 'HTTP/1.1',
//    'SCRIPT_NAME' => '/api/user/profile.php',
//    'SCRIPT_FILENAME' => '/var/www/html/api/user/profile.php',
//    'PHP_SELF' => '/api/user/profile.php',
//    'DOCUMENT_ROOT' => '/var/www/html',
//    'HTTPS' => 'off',
//    'HTTP_REFERER' => 'https://google.com/search?q=example'
//);


//$_POST
//$_POST = array(
//                'mobile' => '7388847685',
//                'name' => 'karan',
//                'id' => '101',
//                'address' => 'nsti, kolkata'
//               )
//$id = $_POST['id'];        // Looks for input with name="id"
//$name = $_POST['name'];    // Looks for input with name="name"  
//$address = $_POST['address']; // Looks for input with //name="address"
//$mobile = $_POST['mobile'];    // Looks for input with //name="mobile"

?>