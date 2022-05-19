

<?php
    session_start();

    echo $_SESSION['name'];
    
    if(isset($_POST['sub2'])){
        echo "<script> alert('" . $_SESSION['name'] . "') </scirpt>";
    }

    if(isset($_POST['tester'])){
        echo $_SESSION['class'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="sub2">nope</button>
    </form>


    <button name="tester">hi</button>
</body>
</html>