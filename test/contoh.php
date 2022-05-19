<?php 
    session_start();
    if(isset($_POST['sub'])){
        $_SESSION['name'] = $_POST['nama'];
        $_SESSION['class'] = $_POST['kelas'];
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
    <form action="contoh1.php" method="post">
        name : <input type="text" name="nama">
        kelas : <input type="text" name="kelas">

        <button type="submit" name="sub"></button>
    </form>
</body>
</html>