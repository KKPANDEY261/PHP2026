<?php
//echo "<h2>PHP File Handling Complete Demonstration</h2>";

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



//file handling predifine method_exists
//File Mode Reference Table
//  Mode             	Description
//   r	           Read only - starts at beginning of file
//   r+	           Read/Write - starts at beginning of file
//   w	           Write only - truncates file to zero length
//   w+	           Read/Write - truncates file to zero length
//   a	           Append only - writes to end of file
//   a+	           Read/Append - reads from beginning, writes to end
//   x	           Create and write only - fails if file exists
//   x+	           Create and read/write - fails if file exists


//   Key Functions Summary
//   Function	                     Purpose
//    fopen()	                Open file or URL
//    fclose()	                Close an open file pointer
//    fwrite()	                Write to file
//    fread()	                Read from file
//    fgets()	                Get line from file pointer
//    fgetc()	                Get character from file pointer
//    file_exists()	            Check if file exists
//    filesize()	            Get file size
//    file_get_contents()	    Read entire file into string
//    unlink()	                Delete a file
//    mkdir()	                Create directory
//    rmdir()	                Remove directory
//    is_dir()	                Check if path is directory
//    scandir()	                List files in directory