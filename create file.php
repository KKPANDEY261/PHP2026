<?php
echo "<h2>PHP File Handling Complete Demonstration</h2>";

$dirName = "my_data";
$filename = $dirName . "/test_file.txt";

// 1. CREATE DIRECTORY
echo "<h3>1. Creating Directory</h3>";
if (!is_dir($dirName)) {
    mkdir($dirName, 0777, true);
    echo "Directory created: $dirName<br>";
} else {
    echo "Directory already exists: $dirName<br>";
}

// 2. CREATE AND WRITE TO FILE
//echo "<h3>2. Creating and Writing to File</h3>";
//$file = fopen($filename, 'w');
//if ($file) {
//    fwrite($file, "PHP File Handling \n");
//    fwrite($file, "========================\n\n");
//    fwrite($file, "This file demonstrates:\n");
//    fwrite($file, "- Creating files\n");
//    fwrite($file, "- Writing data\n");
//    fwrite($file, "- Reading characters\n");
//    fwrite($file, "- Appending data\n");
//    fclose($file);
//    echo "File created and initial data written.//<br>";
//}
//
//// 3. CHECK FILE EXISTENCE AND SIZE
//echo "<h3>3. File Information</h3>";
//if (file_exists($filename)) {
//    echo "File exists: Yes<br>";
//    echo "File size: " . filesize($filename) . " //bytes<br>";
//    echo "File path: " . realpath($filename) . //"<br>";
//}
//
//// 4. APPEND TO FILE
//echo "<h3>4. Appending Data</h3>";
//$file = fopen($filename, 'a');
//if ($file) {
//    fwrite($file, "\n--- Additional Information //---\n");
//    fwrite($file, "Date created: " . date("Y-m-d //H:i:s") . "\n");
//    fclose($file);
//    echo "Data appended successfully.<br>";
//}
//
//// 5. READING FILE
//echo "<h3>5. Reading file</h3>";
//
// for read method 
// $content=file_get_contents($filename) 
//for next line 
// nl2br($content) for spacing
// $line=file($filename)  convert data in array
//echo implode("<br>", $lines) for print array
//readfile($filename)  direct browser print
//
//$filename = "test_file.txt";
//
//$file = fopen($filename, 'r');
//if ($file) {
//    while (($line = fgets($file)) !== false) {
//        echo $line . "<br>";
//    }
//    fclose($file);
//}
//
//
//
//
//
//// 7. DELETE FILE
//echo "<h3>7. Deleting File</h3>";
//$filename="my_data/new.txt";

//if (file_exists($filename)) {
//    if (unlink($filename)) {
//        echo "File '$filename' deleted //successfully.<br>";
//    } else {
//        echo "Failed to delete file.<br>";
//    }
//}
//

?>