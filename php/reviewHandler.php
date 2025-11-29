<?php 

session_start();
require_once('./connection.php');


if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}



if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
    $aname=$_POST['aname'];
    $content=$_POST['review'];
    $rating=$_POST['rating'];

    $mysqli="INSERT  INTO `reviews` (`User_Name`,`App_Name`,`Rating`,`Review`) VALUES ('$username' ,'$aname','$rating','$content')" ;

    $result = mysqli_query($conn, $mysqli);
    if($result){
        header('Location:./reviewtable.php?insert=true');
    }
}
?>