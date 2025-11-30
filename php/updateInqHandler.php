<?php
session_start();
require_once('./connection.php');


if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}


$userid=$_GET['userId'];
$inqid=$_GET['inqId'];
$newcontent=$_POST['inq'];
$inqty=$_POST['inquiry_type'];


$sql = "UPDATE inquiries SET Description='$newcontent' WHERE User_ID='$userid' AND Inquiry_ID='$inqid'";

$result = mysqli_query($conn,$sql);

$sql1 = "UPDATE inquiries SET Inquiry_Type='$inqty' WHERE User_ID='$userid' AND Inquiry_ID='$inqid'";

$result1 = mysqli_query($conn,$sql1);

if($result){
    header('Location:./inquirytable.php');
}

?>