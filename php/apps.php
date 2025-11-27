<?php require_once("./header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="../styles/apps.css">
</head>
<body>
    <div class="apps">

    <!-- Tabs -->
   <!--  <div class="tabs">
        <button class="tablinks active" onclick="openCategory(event, 'ForYou')">For you</button>
        <button class="tablinks" onclick="openCategory(event, 'TopFreeApps')">Top Free Apps</button>
        <button class="tablinks" onclick="openCategory(event, 'PremiumApps')">Premium Apps</button>
    </div> -->

    <!-- Content for For You -->
    <div id="ForYou" class="tabcontent" style="display: block;">
        <h3>Communication</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/telegram.png.jpg" width="150px" height="150px" alt="Clash of Clans"></div>
                
                <button class="fight"><p>Telegram</p></button></a>
                <p>3.8⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/messenger.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Messenger</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/whatsapp.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>Whatsapp</p></button>
                <p>4.6⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/snapchat.png.png" width="150px" height="150px"></div>
                <button class="fight"><p>Snap Chat</p></button>
                <p>4.7⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/instagram.png.jpg" width="150px" height="150px"></div>
                <a href="../IT23669994%20-%20Yeshani/appdisplay.php"> <button class="fight"><p>Instagram</p></button></a>
                <p>4.7⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/zoom.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Zoom</p></button>
                <p>4.5⭐</p>
            </div>
        </div>
        <button class="see-more">See more</button>


        <h3>Buisness</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/camscanner.png.png" width="150px" height="150px"></div>
                <button class="fight"><p>Camscanner</p></button>
                <p>4.8⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/linkdin.png.png" width="150px" height="150px"></div>
                <a href="../IT23669994%20-%20Yeshani/LinkedIn.php"><button class="fight"><p>Linkedin</p></button></a>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/myslt.png.png" width="150px" height="150px"></div>
                <button class="fight"><p>My Slt</p></button>
                <p>3.2⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/microsoft%20teams.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Microsoft Teams</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/whatsapp%20buisness.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>WhatsApp Buisness</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/outlook.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Microsoft Outlook</p></button>
                <p>4.7⭐</p>
            </div>
        </div>
        <button class="see-more">See more</button>

        <h3>Entertainment</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/youtube.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>YouTube</p></button>
                <p>4.1⭐</p>
            </div>
            
            <div class="app-card">
                <div class="app-img"><img src="../img/netflix.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>Netflix</p></button>
                <p>4.2⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/vidmate.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Vidmate</p></button>
                <p>4.7⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/talking%20tom%20cat.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>My Talking Tom</p></button>
                <p>4.2⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/tiktok.png.jpg" width="150px" height="150px"></div>
                <a href="../IT23669994%20-%20Yeshani/TikTok.php"><button class="fight"><p>TikTok</p></button></a>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/mxplayer.png.png" width="150px" height="150px"></div>
                <button class="fight"><p>Mx Player</p></button>
                <p>5.0⭐</p>
            </div>
        </div>
        <button class="see-more">See more</button>

    
    </div>

    <!-- Content for Top Free Apps and Premium Apps will be similar -->
    <div id="TopFreeApps" class="tabcontent">
        <h3>Top Free Apps will be displayed here</h3>
    </div>

    <div id="PremiumApps" class="tabcontent">
        <h3>Premium Apps will be displayed here</h3>
    </div>

    
    </div>
    <?php require_once("./footer.php");?>
</body>
</html>








