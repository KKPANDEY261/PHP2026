<?php
session_start();
if (!isset($_SESSION['progress'])) {
    $_SESSION['progress'] = 0;
}

if ($_SESSION['progress'] < 100) {
    $_SESSION['progress'] += 10;
    usleep(500000);
}

$progress = $_SESSION['progress'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar</title>
    <style>
        .progress-container {
            width: 100%;
            background-color:rgb(243, 243, 243);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .progress-bar {
            width: <?php echo $progress; ?>%;
            height: 30px;
            background-color: rgb(76,86,175);
            text-align: center;
            line-height: 30px;
            color: white;
            border-radius: 5px;
        }
        </style>
</head>
<body>
    <h1>Progress Bar </h1>
    <div class="progress-container">
        <div class="progress-bar"> <?php echo $progress; ?>%</div>
    </div>
    <?php if ($progress >= 100): ?>
        <p> Task complete!</p>
        <?php else: ?>
        
        <meta http-equiv="refresh" content="1">
        <?php endif; ?>
</body>
</html>