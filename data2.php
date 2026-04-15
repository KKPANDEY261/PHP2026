<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //print_r($_GET);
     //print_r($_GET);
    //echo $_GET['id'];
//print_r($_SERVER);
if($_SERVER['REQUEST_METHOD']=="POST"){
$roll_no=$_POST['roll_no'];
$subject=$_POST['subject'];
$marks=$_POST['marks'];
$teacher=$_POST['teacher'];
$id=$_POST['id'];

    echo $roll_no.'<br>'.$subject.'<br>'.$marks.$teacher.$id;
   
    
}
    ?>
    <form method="post">
          <input name='roll_no' placeholder="enter youe roll no">
        <input name='subject' placeholder="enter subject name">
        <input name='marks' placeholder="enter your marks">
        <input name='teacher' placeholder="enter your teacher name">
        <input name='id' placeholder="enter your id">
        <button>submit</button>
    </form>

    
</body>
</html>