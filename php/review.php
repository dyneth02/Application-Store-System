<?php session_start();
require_once('./connection.php');?>
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
    <link rel="stylesheet" href="../styles/review.css">
</head>
<body>
<div class="review-container">
        <h1>Describe your experience
        </h1>
        <form id="review-form" action="reviewHandler.php" method="POST">
            <label for="name">App Name</label>
            <input type="text" id="name" name="aname" required>

            <label for="rating">Rating (1-5)</label>
            <select id="rating" name="rating" required>
                <option value="5">5 </option>
                <option value="4">4 </option>
                <option value="3">3 </option>
                <option value="2">2 </option>
                <option value="1">1</option>
            </select>

            <label for="review">Your Review</label>
            <textarea id="review" name="review" rows="4" required></textarea>

            <button type="submit" name="submit">Submit Review</button>
        </form>
        <div id="review-output"></div>
    </div>
    
    
</body>
</html>