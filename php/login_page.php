<?php
    session_start();
    require_once('./connection.php');

    if (isset($_GET['update'])) {
        $updated = $_GET['update'];
    }

    if (isset($_GET['update']) && $updated == 'true') {
        echo '<script>setTimeout(function() { alert("Account Information Successfully Updated");}, 1000); </script>';
    }

    // Initialize errors array
    $errors = array();

    // form submission validation
    if (isset($_POST['submit'])) {

        // check whether the email and password have been entered
        if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
            $errors[] = 'Email is missing or invalid..!';
        }
        if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
            $errors[] = 'Password is missing or invalid..!';
        }
        
        // check the errors
        if (empty($errors)) {
            // store email & password into variables
            $email = $_POST['email'];
            $password = $_POST['password'];

            // prepare database query
            $sql_query = "SELECT * FROM registered_user WHERE User_Email = '$email' AND User_Password = '$password' LIMIT 1";

            $result_set = mysqli_query($conn, $sql_query);

            if ($result_set) {
                if (mysqli_num_rows($result_set) == 1) {
                    // Fetch user data
                    $user = mysqli_fetch_assoc($result_set);
                    
                    // Set session variables
                    $_SESSION['userid'] = $user['User_ID'];
                    $_SESSION['email'] = $user['User_Email'];
                    $_SESSION['username'] = $user['Username'];
                    $_SESSION['firstname'] = $user['F_Name'];
                    $_SESSION['lastname'] = $user['L_Name'];
                    $_SESSION['status'] = $user['Privilage_Status'];
                    $_SESSION['contactno'] = $user['Contact_No'];

                    // Redirect to the main application page
                    header('Location: ../website?login=succuss');
                
                    exit(); // Important to stop execution after redirect
                } else {
                    $errors[] = 'Invalid Email or Password..!'; // Set error if credentials are incorrect
                }
            } else {
                $errors[] = 'Query Failed..!'; // Handle query failure
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Plus</title>
    <link rel="stylesheet" href="login_page.css">
    <link rel="stylesheet" href="utility.css">

    <style>
        .msg {
            display: flex;
            justify-content: center;
            background-color: var(--clr-fk_bld);
            text-align: center;
            color: var(--clr-ivory);
        }
    </style>
</head>
<body>
    <div class="circle"></div>
    <!-- error msg  -->
    <?php
        if (isset($errors) && !empty($errors)) {
            foreach ($errors as $error) {
                echo '<h3 class="msg">' . htmlspecialchars($error) . '</h3>';
            }
        }
    ?>

    <?php require_once('./headerforLogin.php') ?>
    
    <!-- form section starts here  -->
    <form action="login_page.php" method="post" class="frm" style="height: 44rem;">
        <div class="content_box">
            <div class="head_txt">
                <h1>Login</h1>
                <h3>Stay updated on your Most Desired Apps</h3>
            </div>
            <div class="input_fields">
                <div class="wrapper">
                    <input type="text" name="email" id="mail" placeholder="Email" required>
                </div>
                <div class="wrapper">
                    <input type="password" name="password" id="pass" placeholder="Password" required>
                </div>
            </div>
            <div class="fgt_pass">
                <p><strong><a href="">Forgot Password</a></strong></p>
            </div>
            <div class="or">
                <button type="submit" name='submit' class="submit_btn">Log in</button>
            </div>
            <div class="join">
                <p><strong>Don't have an account?</strong></p>
                <p><strong><a href="register.php">Join Now</a></strong></p>
            </div>
        </div>
    </form>
    <!-- form section ends here  -->

    <!-- footer section starts here  -->
    <?php require_once("./footer.php") ?>
    <!-- footer section ends here  -->
</body>
</html>

<?php mysqli_close($conn); ?>
