<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appPlus header</title>
    <!---------link to css-------->
    <link rel="stylesheet" href="../styles/header.css">
    <!---------box icons---------->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!---------nav bar------------>
    <header>
        <div class="logo">
            <a href="#"><i class='bx bxl-firebase'></i>appPlus</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../../website" class="active">Home</a></li>
                <li><a href="../IT23647596%20-%20Sandesh/apps.php">Apps</a></li>
                <li><a href="../IT23647596%20-%20Sandesh/games.php">Games</a></li>
                <li><a href="">About Us</a></li>
                <li>
                    <a href="#">Support &nbsp;<i class='bx bxs-chevron-down'></i></a>
                    <ul class="dropdown">
                        <li><a href="contactus.php">ContactUs</a></li>
                        <li><a href="feedback.php">Feedbacks</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="search-bar">
            <input type="search" placeholder="Search">
            <i class='bx bx-search-alt-2' ></i>
        </div>
        <div class="notifications">
            <i class='bx bxs-bell' ></i>
        </div>
        <div class="btn">
            <?php 
                if(isset($_SESSION['userid']) && isset($_SESSION['firstname'])) {
                    echo "<div class=\"profile_section\">";
                    echo "<h4 class=\"profile_text\">Hello " . htmlspecialchars($_SESSION['firstname']) . "</h4>";
                    echo "></a>";
                    echo "</div>";
                } else {
                    echo 
                    "<button onclick=\"window.location.href='./login_page.php'\">login</button>
                    <button onclick=\"window.location.href='./register.php'\">Sign up</button>";
                }
                
            ?>
        </div>
    </header>
</body>
</html>