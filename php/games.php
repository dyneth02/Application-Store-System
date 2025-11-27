<?php require_once("./header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="../styles/games.css">
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
        <h3>Racing Games</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/asphalt8.png.jpeg" width="150px" height="150px" alt="Clash of Clans"></div>
                <button class="fight"><p>Asphalt 8</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/csr2.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>CSR 2</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/needforspeed.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Need for Speed</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/realracing.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Real Racing 3</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/trafficrider.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Traffic Rider</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/racepromax.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Race Max Pro</p></button>
                <p>4.8⭐</p>
            </div>
        </div>
        <button class="see-more">See more</button>

        <h3>Action Games</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/callofduty.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>Call of Duty</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/bloodstrike.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Blood Strike</p></button>
                <p>4.6⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/freefire.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>Free Fire</p></button>
                <p>4.6⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/pubg.png.jpg" width="150px" height="150px"></div>
                <button class="fight"><p>Pubg</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/mortalcombat.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Mortal Combat</p></button>
                <p>4.1⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/shadowfight.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Shadow Fight 2</p></button>
                <p>4.5⭐</p>
            </div>
        </div>
        <button class="see-more">See more</button>

        <h3>Premium Apps</h3>
        <div class="app-row">
            <div class="app-card">
                <div class="app-img"><img src="../img/earntodie.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Earn to Die</p></button>
                <p>4.1⭐</p>
            </div>
            
            <div class="app-card">
                <div class="app-img"><img src="../img/battleship.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Battleship</p></button>
                <p>4.5⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/hitmansniper.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Hitman Sniper</p></button>
                <p>4.4⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/minecraft.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Minecraft</p></button>
                <p>4.6⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/monopoly.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Monoplay</p></button>
                <p>4.7⭐</p>
            </div>
            <div class="app-card">
                <div class="app-img"><img src="../img/shadowknight.png.jpeg" width="150px" height="150px"></div>
                <button class="fight"><p>Shadow Knight</p></button>
                <p>4.4⭐</p>
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

    <script src="script.js"></script>
    </div>
    <?php require_once("./footer.php");?>
</body>
</html>








