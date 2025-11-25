<?php
    // Start the session
    session_start();

    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page with a log out message
    header('Location: ./login_page.php?log_out=true');
    exit(); // Ensure no further code is executed after the redirect
?>
