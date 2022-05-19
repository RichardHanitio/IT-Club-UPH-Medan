<?php 
    //Connect to database
    $conn = mysqli_connect("localhost", "root", "", "itclub");

    $name;
    $email ;
    $studentId;
    $phoneNum;
    $lineId;
    $password;


    if(isset($_POST["submit1"])){
        $name = $_POST["full-name"];
        $email = $_POST["email"];
        $studentId = $_POST["student-id"];
        $phoneNum= $_POST["phone-num"];
    }

    if(isset($_POST["submit2"])){
        $lineId= $_POST["line-id"];
        $password = $_POST["password"];

        $query = "INSERT INTO register(`id`, `full_name`, `email`, `nim`, `phone_number`, `line_id`, `password`) VALUES ('', '$name','$email' ,'$studentId', '$phoneNum', '$lineId', '$password')";

        mysqli_query($conn, $query);

        echo "<script>
            alert(berhasil);
        </script>";
    }
?>