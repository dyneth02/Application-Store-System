<?php
session_start();
require_once('./connection.php');
$userid = $_SESSION['userid'];

$sql = "DELETE FROM registered_user WHERE User_ID = '$userid'";

$result = mysqli_query($conn, $sql);

if($result) {
    session_unset();
    session_destroy();
    header('Location: ./apps.php');
}

?>