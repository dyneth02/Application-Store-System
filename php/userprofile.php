<?php require_once('./header.php');
require_once('./connection.php');
?>
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
    <title>User Info Display</title>
    <link rel="stylesheet" href="../styles/userprofile.css">
</head>
<body>
    <div class="user_card_container">
        <div class="user-card">
            <div class="header">
                <h2><?php echo $_SESSION['status']?> Information</h2>
            </div>
            <div class="content">
                <div class="info-row">
                    <label>Email:</label>
                    <span class="info"><?php echo $_SESSION['email']?></span>
                </div>
                <div class="info-row">
                    <label>Username:</label>
                    <span class="info"><?php echo $_SESSION['username']?></span>
                </div>
                <div class="info-row">
                    <label>Password:</label>
                    <span class="info">*********</span>
                </div>
                <div class="info-row">
                    <label>First Name:</label>
                    <span class="info"><?php echo $_SESSION['firstname']?></span>
                </div>
                <div class="info-row">
                    <label>Last Name:</label>
                    <span class="info"><?php echo $_SESSION['lastname']?></span>
                </div>
                <div class="info-row">
                    <label>Status:</label>
                    <span class="info"><?php echo $_SESSION['status']?></span>
                </div>
                <div class="info-row">
                    <label>Contact Number:</label>
                    <span class="info"><?php echo $_SESSION['contactno']?></span>
                </div>
            </div>

            <!-- Sign Out Button -->
            <div class="signout-section">
            <a href="signout.php" onclick="alert('Are you sure ?')"><button class="signout-btn" onclick="signOut()">Sign Out</button></a>
            <a href="deleteacc.php" onclick="alert('Are you sure ?')"><button class="signout-btn" onclick="deleteAcc()">Delete Account</button></a>
            <a href="changeInfo.php"><button class="signout-btn">Change Info</button></a>
            </div>
        </div>
    </div>
    <?php require_once('./footer.php') ?>

    <script>
        function signOut() {
            alert("Signing out...");
        }
        function deleteAcc() {
            alert("Deleting Account ..?");
        }
    </script>

</body>
</html>
