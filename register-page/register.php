<?php

    $conn = mysqli_connect("localhost", "root", "", "itclub");
    
    if(isset($_POST['submited'])){
        $name = $_POST["full-name"];
        $email = $_POST["email"];
        $studentId = $_POST["student-id"];
        $phoneNum= $_POST["phone-num"];
        $lineId= $_POST["line-id"];
        $password = $_POST["password"];

        $query = "INSERT INTO register(`id`, `full_name`, `email`, `nim`, `phone_number`, `line_id`, `password`) VALUES ('', '$name','$email' ,'$studentId', '$phoneNum', '$lineId', '$password')";

        mysqli_query($conn, $query);
        header("Location: ../index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/logo-without-name.png">
    <link rel="stylesheet" href="register-2.css">
    <title>IT Club | Register</title>

    
</head>
<body>
    <div class="outer-container">
        <div class="inner-container">
            <form  class="contents" method="post" id="registerForm">
                <div class="contents" id="page1">
                    <h3 class="title">Register</h3>
                    <label class="field">
                        <div>Full Name</div>
                        <input type="text" name="full-name" placeholder="Enter Your Full Name" >
                    </label>
                    <label class="field">
                        <div>UPH Email</div>
                        <input type="email" name="email" placeholder="Enter Your UPH Email" >
                    </label>
                    <label class="field">
                        <div>Student ID (NIM)</div>
                        <input type="text" name="student-id" placeholder="Enter Your Student ID" >
                    </label>
                    <label class="field">
                        <div>Phone Number</div>
                        <input type="phone" name="phone-num" placeholder="Enter Your Phone Number" >
                    </label>
                </div>

                <!-- Second Page -->
                <div class="contents" id="page2">
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
                        <button type="submit" name="submited" class="btn primary-btn register-btn">Register</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
