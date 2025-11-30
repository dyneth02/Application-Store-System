<?php 
include("header.php"); 
if(isset($_GET['login']) && $_GET['login'] == 'succuss') {
    echo '<script>setTimeout(function() { alert("Welcome..! ' . $_SESSION['firstname'] .'");}, 1000); </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>appPlus Home page</title>
        <!------favicon------->
        <link rel="icon" type="image/x-icon" href="../img/favicon.png">
        <!-----link to css----->
        <link rel="stylesheet" href="../styles/index.css">
        <!-----box icons----->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!--------- include header ---------->
        <main>
            <!------------ image slider -------------->
            <section class="image-slider">
                <div class="slider-frame">
                    <img src="../img/games.webp" alt="battle royal games">
                    <div class="text-content">
                        <h2>Join the Winning Streak </h2>
                        <p>Unlock New Levels!</p> 
                        <button>Start Playing</button>
                    </div>
                </div>
                <div class="slider-frame">
                    <img src="../img/customer%20support.jpg" alt="get customer support">
                    <div class="text-content">
                        <h2>Got Questions?  </h2>
                        <p>Our Customer Support is here to help!</p>
                        <button>Get Support</button>
                    </div>
                </div>
                <div class="slider-frame">
                    <img src="../img/apps.jpg" alt="apps">
                    <div class="text-content">
                        <h2>Discover the best Apps in every category </h2>
                        <p>your all in one destination</p>
                        <button>Explore</button>
                    </div>
                </div>
                <div class="slider-frame">
                    <img src="../img/dev.jpg" alt="developers">
                    <div class="text-content">
                        <h2>For Developers, By Developers </h2>
                        <p>Build, Upload, and Share</p>
                        <button>Start Uploading</button>
                    </div>
                </div>
                <div class="dots">
                    <span class="dot" onclick=""></span>
                    <span class="dot" onclick=""></span>
                    <span class="dot" onclick=""></span>
                    <span class="dot" onclick=""></span>
                </div>
            </section>
            <!------------ Top downloads section ------------->
            <section class="categories">
                <h2>Top downloads</h2>
                <div class="app-cards">
                    <div class="download-card">
                        <img src="../img/tiktok.png" alt="tik tok">
                        <h4>TikTok</h4>
                        <p>TikTok Pte. Ltd</p>
                        <p>4.4<i class='bx bxs-star'></i></p>
                    </div>
                    <div class="download-card">
                        <img src="../img/whatsapp.png" alt="">
                        <h4>WhatsApp Messenger</h4>
                        <p>WhatsApp LLC</p>
                        <p>4.2<i class='bx bxs-star'></i></p>
                    </div>
                    <div class="download-card">
                        <img src="../img/youtube.png" alt="you tube">
                        <h4>YouTube</h4>
                        <p>Google LLC</p>
                        <p>4.1<i class='bx bxs-star'></i></p>
                    </div>
                    <div class="download-card">
                        <img src="../img/spotify.png" alt="spotify">
                        <h4>Spotify:Music and Podcasts</h4>
                        <p>Spotify AB</p>
                        <p>4.5<i class='bx bxs-star'></i></p>
                    </div>
                    <div class="download-card">
                        <img src="../img/candy%20crush.jpg" alt="candy crush saga">
                        <h4>Candy Crush Saga</h4>
                        <p>King</p>
                        <p>4.5<i class='bx bxs-star'></i></p>
                    </div>
                    <div class="download-card">
                        <img src="../img/share%20it.png" alt="share it">
                        <h4>SHAREit: Transfer, Share Files</h4>
                        <p>Smart Media4U Technology Pte. Ltd.</p>
                        <p>4.5<i class='bx bxs-star'></i></p>
                    </div>
                </div>
            </section>
            <!------------ Trending games section ------------>
            <section class="categories">
                <h2>Trending games</h2>
                <div class="app-cards">
                    <div class="game-card">
                        <img src="../img/coc.png" alt="clash of clans">
                        <h4>Clash of Clans</h4>
                        <p>Supercell</p>
                        <p>4.6 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="game-card">
                        <img src="../img/pubg.png" alt="pubg mobile">
                        <h4>Pubg mobile</h4>
                        <p>Level Infinite</p>
                        <p>4.5 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="game-card">
                        <img src="../img/honorOfKings.png" alt="honor of kings">
                        <h4>Honor of Kings</h4>
                        <p>Level Infinite</p>
                        <p>4.6 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="game-card">
                        <img src="../img/freefire.png" alt="free fire">
                        <h4>Free fire</h4>
                        <p>Garena International I</p>
                        <p>4.6 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="game-card">
                        <img src="../img/cod.jpg" alt="call of duty">
                        <h4>Call of Duty : Mobile Season 8</h4>
                        <p>Activision Publishing, Inc.</p>
                        <p>4.5 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="game-card">
                        <img src="../img/blood%20strike.png" alt="blood strike">
                        <h4>Blood strike - FPS for all</h4>
                        <p>NetEase Games</p>
                        <p>4.5 <i class='bx bxs-star'></i></p>
                    </div>
                </div>
            </section>
            <!------------ Trending apps section ------------->
            <section class="categories">
                <h2>Trending apps</h2>
                <div class="app-cards">
                    <div class="app-card">
                        <img src="../img/threads.png" alt="threads">
                        <h4>Threads</h4>
                        <p>Instagram</p>
                        <p>4.5 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="app-card">
                        <img src="../img/instagram.png" alt="instagram">
                        <h4>Instagram</h4>
                        <p>Instagram</p>
                        <p>4.5 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="app-card">
                        <img src="../img/binance.png" alt="binance">
                        <h4>Binance: Buy Bitcoin and Crypto</h4>
                        <p>Binance Inc</p>
                        <p>4.7 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="app-card">
                        <img src="../img/telegram.png" alt="telegram">
                        <h4>Telegram</h4>
                        <p>Telegram FZ-LLC</p>
                        <p>4.4 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="app-card">
                        <img src="../img/netflix.png" alt="netflix">
                        <h4>Netflix</h4>
                        <p>Netflix Inc</p>
                        <p>4.2 <i class='bx bxs-star'></i></p>
                    </div>
                    <div class="app-card">
                        <img src="../img/canva.png" alt="canva">
                        <h4>Canva: Design, Art & AI Editor</h4>
                        <p>Canva</p>
                        <p>4.7 <i class='bx bxs-star'></i></p>
                    </div>
                </div>
            </section>
        </main>
        <!--------- footer header ---------->
        <?php
            include("footer.php");
        ?>
        <script src="../js/index.js"></script>

    </body>
</html>