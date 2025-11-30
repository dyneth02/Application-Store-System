<?php session_start();
require_once('./connection.php');
$userid=$_GET['userId'];
$inqid=$_GET['inqId'];
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
    <title>Inquiry Page</title>
    <link rel="stylesheet" href="styles/updatefeedback.css">
</head>
<body>
    <div class="container">
        <h1>Submit your Inquiry</h1>
        <form id="updatefeedbackForm" action="updateInqHandler.php?userId=<?php echo $userid?>&inqId=<?php echo $inqid?>" method="POST">
            <select name="inquiry_type" id="inquiry-type">
                <option value="Account issues">Account issues</option>
                <option value="Download/Installation issues">Download/Installation issues</option>
                <option value="Payment/Billing issues">Payment/Billing issues</option>
                <option value="App functionality">App functionality</option>
                <option value="Developer support">Developer support</option>
            </select><br><br>
            
            <label for="feedback">Inquiry:</label>
            <textarea id="feedback" name="inq" rows="4" required></textarea>
            
            <button type="update" name="update">Update</button>
        </form>
        
        <h2>Thank You</h2>
    </div>
    
</body>
</html>