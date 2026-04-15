<?php
// view_files.php
$conn = mysqli_connect("localhost", "root", "", "hello");
//$result = $conn->query("SELECT * FROM file");
$result = mysqli_query($conn, "SELECT * FROM file");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Uploaded Files</title>
</head>
<body>
    <h2>Uploaded Files</h2>
    <br><br>
    
    <?php if(mysqli_num_rows($result) > 0): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr bgcolor="#f0f0f0">
                <th>ID</th>
                <th>File Name</th>
                <th>Action</th>
            </tr>
            <?php 
            $sr_no = 1;
            while($row = mysqli_fetch_assoc($result)): 
            ?>
            <tr>
                <td><?php echo $sr_no++; ?></td>
                <td><?php echo $row['path']; ?></td>
                <td>
<a href="<?php echo $row['path']; ?>" target="_self">View</a> | 
                    <a href="<?php echo $row['path']; ?>" download>Download</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p> No files uploaded yet!</p>
    <?php endif; ?>
</body>
</html>