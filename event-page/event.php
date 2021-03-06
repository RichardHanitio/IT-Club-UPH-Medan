<?php 
    $conn = mysqli_connect("localhost", "root", "", "itclub");

    $result = mysqli_query($conn, "SELECT * FROM eventlist");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="event.css">
    <link rel="icon" type="image/png" href="../images/logo-without-name.png">
    <title>IT Club | Event</title>
</head>
<body>
    <!-- Header container -->
    <header class="header-nav">
        <!-- Logo -->
        <div class="header-left">
            <a href="/index.html">
                <img src="/images/itclublogo.png" alt="IT Club" class="fit">
            </a>
        </div>

        <div class="header-right">
            <label>
                <input type="checkbox" id="check" onclick="isChecked()">
                <div class="menu-icon">
                    <div class="bar" id="bar1"></div>
                    <div class="bar" id="bar2"></div>
                    <div class="bar" id="bar3"></div>
                </div>
            </label>

            <div class="header-list-down-container" id="list-down">
                <ul class="header-list-down-middle">
                    <li class="header-navbar-menu"><a href="/index.html">HOME</a></li>
                    <li class="header-navbar-menu"><a href="../event-page/event.html">EVENT</a></li>
                    <li class="header-navbar-menu"><a href="../about-page/about.html">ABOUT US</a></li>
                </ul>
        
                <!-- Regis and login button -->
                <ul class="header-list-down-right">
                    <li><button class="btn primary-btn" onclick="location.href='/register-page/register.html'">Register</button></li>
                    <li><button class="btn secondary-btn" id="btn-log-in">Log in</button></li>
                </ul>
            </div>
            <!-- Navbar menu -->
        </div>
    </header>

    <!-- Sorting and Searching -->
    <div class="event-head">
        <div class="event-head-left">
            <label for="sort-box">Sort By :</label>
            <select name="sort-box" id="sort-box">
                <option value="">Newest event</option>
                <option value="">Oldest event</option>
            </select>
        </div>

        <div class="event-head-right">
            <div class="event-head-right-container">
                <button type="submit"><img src="/images/search logo.png" alt=""></button>
                
                <input type="text" placeholder="Find event name...">
            </div>
        </div>
        
        
    </div>

    <!-- Poster -->
    <main class="event-main">
        <?php while ($event = mysqli_fetch_array($result)) :?>
            <?php
            echo '
            <a href="" class="event-poster">
                <img src="/images/'.$event[3].'" alt="">
                <h3 class="title">'.$event[1].'</h3>
                <p class="organizer">'.$event[2].'</p>
            </a>'
            ?>
        <?php endwhile; ?> 
    </main>


    <script>

        var headerMobile = document.querySelector('.header-list-down-container')
        var bar1 = document.getElementById('bar1')
        var bar2 = document.getElementById('bar2')
        var bar3 = document.getElementById('bar3')

        function isChecked(){
            if(document.getElementById("check").checked){
                headerMobile.style.transform = "translateX(0)"
                bar1.classList.toggle("anim1");
                bar2.classList.toggle("anim2");
                bar3.classList.toggle("anim3");
            }
            else{
                headerMobile.style.transform = "translateX(100%)"
                bar1.classList.toggle("anim1");
                bar2.classList.toggle("anim2");
                bar3.classList.toggle("anim3");
            }
        }
    </script>
</body>
</html>