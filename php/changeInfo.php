<?php session_start(); ?>
<?php require_once('./connection.php') ?>
<?php 
    if(!isset($_SESSION['userid'])) {
        header('Location:./login_page.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Info</title>
    <link rel="stylesheet" href="../styles/changePass.css">
    <link rel="stylesheet" href="./utility.css">
</head>
<body>
    <div class="main_content">
        <form action="changeInfoHandler.php" method="POST">
            <h1>Change your Information</h1>
            <div class="newpass">
                <label for="">New Password</label>
                <input type="password" name="userpassword" id="pwd" required>
                <div class="show">
                    <label for="">Show Password</label>
                    <input type="checkbox" name="checkbox" id="check">
                </div>
            </div>
            <div class="newpass">
                <label for="">Username</label>
                <input type="text" name="uname" id="pwd" required>
            </div>
            <div class="newpass">
                <label for="">First Name</label>
                <input type="text" name="firstname" id="pwd" required>
            </div>
            <div class="newpass">
                <label for="">Last Name</label>
                <input type="text" name="lastname" id="pwd" required>
            </div>
            <div class="newpass">
                <label for="">Contact Number</label>
                <input type="tel" name="contact" id="pwd" required>
            </div>
            <button type="submit" name="submit" id="btn">Save</button>
        </form>
    </div>
    <?php require_once('./footer.php') ?>
    <script src="change_pass.js"></script>
</body>
</html>