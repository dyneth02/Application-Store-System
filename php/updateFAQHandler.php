<?php
require_once('./connection.php');


if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}

if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}


$userid=$_GET['userId'];
$newcontent=$_POST['faq'];


$sql = "UPDATE faq SET Question='$newcontent' WHERE User_ID='$userid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:./faqtable.php');
}

?>