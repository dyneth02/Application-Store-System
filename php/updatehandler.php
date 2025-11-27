<?php
session_start();
require_once('connection.php');


if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}


$userid=$_GET['userId'];
$newcontent=$_POST['feedback'];


$sql = "UPDATE feedback SET Content='$newcontent' WHERE User_ID='$userid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:feedbacktable.php');
}

?>