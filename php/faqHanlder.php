<?php 
session_start();
require_once('./connection.php');

if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}



if(isset($_POST['submit'])){
    $userid=$_SESSION['userid'];
    $uname=$_SESSION['username'];
    $qtype=$_POST['question_type'];
    $name=$_POST['name'];
    $question=$_POST['question'];

    $mysqli="INSERT  INTO `faq` (`User_ID`,`User_Name`,`Name`,`Question_Type`,`Question`) VALUES ('$userid','$uname','$name','$qtype','$question')";

    $result = mysqli_query($conn, $mysqli);
    if($result){
        header('Location:./faqtable.php>insert=true');
    }
}

?>