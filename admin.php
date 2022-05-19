<?php 
    $conn = mysqli_connect("localhost", "root", "", "itclub");

    $result = mysqli_query($conn, "SELECT * FROM eventlist");

    if(isset($_POST['event-insert'])){
        $title = $_POST['title'];
        $organizer = $_POST['organizer'];
        $poster = $_POST['poster'];
        $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));

        $queryInsert = "INSERT INTO eventlist(`id`, `title`, `organizer`, `poster`, `tanggal`) VALUES ('','$title','$organizer','$poster','$tanggal')";

        mysqli_query($conn,$queryInsert);

    }

    if(isset($_POST['event-change'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $organizer = $_POST['organizer'];
        $poster = $_POST['poster'];
        $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));

        $queryInsert = "UPDATE eventlist SET title='$title',organizer='$organizer',poster='$poster',tanggal='$tanggal' WHERE id = '$id'";

        mysqli_query($conn,$queryInsert);

    }

    if(isset($_POST['event-delete'])){
        $id = $_POST['id'];

        $queryDelete = "DELETE FROM eventlist WHERE id = '$id'"; 
        $query_run = mysqli_query($conn,$queryDelete);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyle.css">
    <title>IT Club | Admin Panel</title>
</head>
<body>
    <div class="event-container">
        <h1>Event Panel</h1>
        <table border="1" cellpadding="10" cecllspacing="0">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>organizer</th>
                <th>poster</th>
                <th>tanggal</th>
            </tr>
            <?php while ($event = mysqli_fetch_array($result)) :?>
                <tr>
                    <th><?= $event[0]; ?></th>
                    <th><?= $event[1]; ?></th>
                    <th><?= $event[2]; ?></th>
                    <th><?= $event[3]; ?></th>
                    <th><?= $event[4]; ?></th>
                </tr>
            <?php endwhile; ?>
        </table>
        

        <div class="event-container-form">
            
            <form class="event-form" action="" method="post">
                    <h2>Insert & Change Form</h2>
                    <label for="id">id : </label>
                    <input type="text" name="id" id="id">

                    <label for="title">title : </label>
                    <input type="text" name="title" id="title">

                    <label for="organizer">organizer : </label>
                    <input type="text" name="organizer" id="organizer">

                    <label for="poster">poster : </label>
                    <input type="text" name="poster" id="poster">

                    <label for="tanggal">tanggal : </label>
                    <input type="date" name="tanggal" id="tanggal">

                    <div class="button-container">
                        <button type="submit" name="event-insert">insert</button>
                        <button type="submit" name="event-change">change</button>
                    </div>
            </form>

            <form class="event-form" method="post">
                <h2>Delete Form</h2>
                <label for="id"> id : </label>
                <input type="text" name="id" id="id">
                <button type="submit" name="event-delete">delete</button>
            </form>
        </div>
        
    </div>
    
</body>
</html>