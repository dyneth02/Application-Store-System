<?php 
session_start();
require_once('./connection.php');

if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $type=$_POST['inquiry-type'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $userid=$_SESSION['userid'];
    $uname=$_SESSION['username'];

    $mysqli="INSERT  INTO `inquiries` (`User_ID`,`Username`,`Name`,`Email`,`Contact_No`,`Inquiry_type`,`Subject`,`Description`) VALUES ('$userid','$uname','$name','$email','$phone','$type','$subject','$description')";

    $result = mysqli_query($conn, $mysqli);
    if($result){
        header('Location:./inquirytable.php?insert=true');
    }
}

?>