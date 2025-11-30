<?php
    require_once('./header.php');
    require_once('./connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appPlus - Submit Inquiry</title>
    <!------favicon------->
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <!-----link to css----->
    <!-- <link rel="stylesheet" href="styles/contact us.css"> -->
    <!-----box icons----->
    <link rel="stylesheet" href="../styles/contactus.css">
</head>
<body>
    <!-- include header -->
    <main>
        <div class="button-stack">
            <a href="inquirytable.php"><button>Show your Inquiries</button></a>
        </div>
        <!---------------inquiry form------------------->
        <div class="inquiry-container">
            <h1>Submit your Inquiries</h1>
            <form action="contactusHandler.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="mail@fake.com" required><br><br>

                <label for="phone">Phone number</label><br>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required><br><br>

                <label for="inquiry-type">Inquiry Type</label><br>
                <select name="inquiry-type" id="inquiry-type">
                    <option value="Account issues">Account issues</option>
                    <option value="Download/Installation issues">Download/Installation issues</option>
                    <option value="Payment/Billing issues">Payment/Billing issues</option>
                    <option value="App functionality">App functionality</option>
                    <option value="Developer support">Developer support</option>
                </select><br><br>

                <label for="subject">Subject</label><br>
                <input type="text" id="subject" name="subject"><br><br>

                <label for="description">Description</label><br>
                <textarea name="description" id="description" rows="10" cols="55"></textarea><br><br>

                <!-- <label for="attachments">Add Attachements</label><br>
                <input type="file" id="attachments" name="attachments"><br><br><br> -->

                <div class="form-buttons">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <?php require_once('./footer.php') ?>
</body>
</html>