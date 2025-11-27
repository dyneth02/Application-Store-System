<?php session_start();
require_once('./connection.php');
$userid=$_GET['userId'];?>

<?php 
    //if(!isset($_SESSION['userid'])) {
        //header('Location:./login_page.php');
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="styles/updatefeedback.css">
</head>
<body>
    <div class="container">
        <h1>Submit your Feedback</h1>
        <form id="updatefeedbackForm" action="updatehandler.php?userId=<?php echo $userid?>" method="POST">

            
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
            
            <button type="update" name="update">Update</button>
        </form>
        
        <h2>Your Feedback</h2>
        <div id="feedbackList"></div>
    </div>
    
</body>
</html>
