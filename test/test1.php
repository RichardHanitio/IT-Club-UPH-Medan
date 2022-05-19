<?php
    if(isset($_POST['submit2222'])){
        $name = $_POST['full-name'];
        $email = $_POST['email'];
        $studentId = $_POST['student-id'];
        $phoneNum = $_POST['phone-num'];
        echo "<script>  alert('alamak') </script>";
    }
    else{
        echo "<script>  alert('alamak oke') </script>";
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
    <form action="test.php" method="post">
        <h3 class="title">Register</h3>
        <label class="field">
            <div>Full Name</div>
            <input type="text" name="full-name" placeholder="Enter Your Full Name" required>
        </label>
        <label class="field">
            <div>UPH Email</div>
            <input type="email" name="email" placeholder="Enter Your UPH Email" required>
        </label>
        <label class="field">
            <div>Student ID (NIM)</div>
            <input type="text" name="student-id" placeholder="Enter Your Student ID" required>
        </label>
        <label class="field">
            <div>Phone Number</div>
            <input type="phone" name="phone-num" placeholder="Enter Your Phone Number" required>
        </label>
        <div class="button-container">
            <button type="submit" name="submit2222" class="btn primary-btn register-btn" >Register</button>
        </div>  
    </form>
</body>
</html>

