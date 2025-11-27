<?php require_once('./header.php');
require_once('./connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="../styles/feedback.css">
</head>
<body>
    <div class="container">
        <h1>Submit your Feedback</h1>
        <form id="feedbackForm" action="feedbackHandler.php" method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="date">Publish Date:</label>
            <input type="text" id="date" name="pDate" required>
            
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
            
            <button type="submit" name="submit">Submit</button>
        </form>
        
        <h2>Your Feedback</h2>
        <a href="feedbacktable.php"><button type="submit">Show all Feedbacks</button></a>
    </div>
    <?php require_once('./footer.php') ?>
    
</body>
</html>

