<?php 
session_start();
require_once('./connection.php');
$uname=$_GET['uname'];
$rid=$_GET['reId'];
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
    <title>Review Page</title>
    <link rel="stylesheet" href="styles/review.css">
</head>
<body>
    <div class="container">
        <h1>Submit your Review</h1>
        <form id="updatereviewForm" action="updatereviewhandler.php?uname=<?php echo $uname?>" method="POST">

            
            <label for="feedback">Review:</label>
            <textarea id="feedback" name="review" rows="4" required></textarea>
            
            <button type="update" name="update">Update</button>
        </form>
        
        <!-- <h2>Your Review</h2> -->
        <div id="feedbackList"></div>
    </div>
    
    
</body>
</html>
