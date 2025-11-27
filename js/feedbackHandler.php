<?php 
session_start();
require_once('./connection.php');

if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}

if(isset($_POST['submit'])){
    $fname=$_POST['name'];
    $content=$_POST['feedback'];
    $pDate=$_POST['pDate'];
    $userId=$_SESSION['userid'];

    $mysqli="INSERT INTO `feedback` (`User_ID`,`Name`,`Content`,`Published_date`) VALUES ('$userId','$fname','$content','$pDate')" ;

    $result = mysqli_query($conn, $mysqli);
    if($result){
        header('Location:feedbacktable.php?insert=true');
    }
}

?>












?>