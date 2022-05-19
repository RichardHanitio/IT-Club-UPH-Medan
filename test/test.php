<?php
    include "function.php";
    $conn = mysqli_connect("localhost", "root", "", "itclub");

    echo $name;
    if(isset($_POST["submit2"])){

        $name = $_POST["full-name"];
        $email = $_POST["email"];
        $studentId = $_POST["student-id"];
        $phoneNum= $_POST["phone-num"];
        
        $lineId= $_POST["line-id"];
        $password = $_POST["password"];

        $query = "INSERT INTO register(`id`, `full_name`, `email`, `nim`, `phone_number`, `line_id`, `password`) VALUES ('', '$name','$email' ,'$studentId', '$phoneNum', '$lineId', '$password')";

        mysqli_query($conn, $query);

        echo "<script>  alert('berhasil') </script>";
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
        <label class="field">
            <div>Line ID</div>
            <input type="text" name="line-id" placeholder="Enter Your Active Line ID">
        </label>
        <label class="field">
            <div>Password</div>
            <input type="password" name="password" placeholder="Enter Your Password">
        </label>
        <label class="field field-re-enter">
            <div>Re-Enter Password</div>
            <input type="password" name="re-pass" placeholder="Re-Enter Your Password">
        
            <label class="field-show-pass">
                <input type="checkbox" name="show-pass">
                <span>Show Password</span>
            </label>
        </label>
    
        <div class="button-container">
            <button type="submit" name="submit2"  class="btn primary-btn register-btn" >Register</button>
        </div>
    </form>
</body>
</html>