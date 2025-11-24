<?php require_once('./connection.php'); ?>

<?php 

    $errors = array();

    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['email']))) {
            $errors[] = 'Email is required';
        }
        if (empty(trim($_POST['username']))) {
            $errors[] = 'Username is required';
        }
        if (empty(trim($_POST['userpassword']))) {
            $errors[] = 'Password is required';
        }
        if (empty(trim($_POST['firstname']))) {
            $errors[] = 'First Name is required';
        }
        if (empty(trim($_POST['lastname']))) {
            $errors[] = 'Last Name is required';
        }
        if (empty(trim($_POST['contactno']))) {
            $errors[] = 'Telephone Number is required';
        }
        if (!isset($_POST['email'])) {
            $errors[] = "Email Address is Invalid";
        }
    
        $email = $_POST['email'];
        $sql_query_email = "SELECT * FROM `registered_user` WHERE User_Email = '$email'";
    
        $result_set_email = mysqli_query($conn, $sql_query_email);
    
        if ($result_set_email) {
            if (mysqli_num_rows($result_set_email) == 1) {
                $errors[] = "Email Address already exists";
            }
        }
    
        $uname = $_POST['username'];
        $sql_query_username = "SELECT * FROM registered_user WHERE Username = '$uname'";
    
        $result_set_username = mysqli_query($conn, $sql_query_username);
    
        if ($result_set_username) {
            if (mysqli_num_rows($result_set_username) == 1) {
                $errors[] = "Username already exists";
            }
        }

        if (empty($errors)) {
            $password = $_POST['userpassword'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contactno = $_POST['contactno'];
            $status = $_POST['status'];
            
            $sql_query = "INSERT INTO registered_user (User_Email, Username, User_Password, F_Name, L_Name, Privilage_Status, Contact_No) VALUES ('$email', '$uname', '$password', '$firstname', '$lastname', '$status', '$contactno')";

            $result = mysqli_query($conn, $sql_query);

            if ($result) {
                header('Location:./login_page.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Realm</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="utility.css">

    <style>
        .msg {
            display: flex;
            justify-content: center;
            background-color: var(--clr-fk_bld);
            padding: 0.25em 0.75em;
            text-align: center;
            color: var(--clr-ivory);
        }

    </style>
</head>
<body>
    <div class="circle"></div>
    <!-- header section starts here -->
    <?php require_once("./headerforLogin.php") ?>
    <!-- header section ends here  -->

    <!-- form secetion starts here  -->
    <?php 
        if (!empty($errors)) {
            echo "<div class=\"msg\">There were error(s) in your form</div>";
            foreach ($errors as $error) {
                echo "<div class=\"msg\">'{$error}'</div>";
            }
        }
    ?>


    <form action="register.php" method="post" class="frm" style="height: 50rem;">
        <div class="content_box" style="height: 44rem;">
            <div class="head_txt">
                <h1>Register</h1>
                <h3>Delve into an  endless Digital Experience</h3>
            </div>
            <div class="input_fields">
                <div class="wrapper">
                    <input type="text" name="email" id="mail" placeholder="Email" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <input type="username" name="username" id="uname" placeholder="Username" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <input type="password" name="userpassword" id="pass" placeholder="Password" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <input type="text" name="firstname" id="fname" placeholder="First Name" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <input type="text" name="lastname" id="lname" placeholder="Last Name" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <input type="tel" name="contactno" id="pass" placeholder="Telephone" class="input_styles" required>
                </div>
                <div class="wrapper">
                    <select name="status" id="dropdown">
                        <option type="" value="User" id="user" placeholder="Telephone" class="input_styles" required> User
                        <option type="" value="Developer" id="developer" placeholder="Telephone" class="input_styles" required> Developer
                    </select>
                </div>


            </div>
            <div class="or">
                <button type="submit" name="submit" class="submit_btn">Sign up</button>
            </div>
            <div class="join">
                <p><strong>Already Registered ?</strong></p>
                <p><strong><a href="login_page.php">Log in</a></strong></p>
            </div>
        </div>
    </form>
    <!-- form secetion ends here  -->

    <!-- footer section starts here  -->
    <?php require_once("./footer.php") ?>
    <!-- footer section ends here  -->
</body>
</html>