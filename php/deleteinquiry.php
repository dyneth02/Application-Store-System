<?php
require_once('./connection.php');

$userid=$_GET['userId'];
$inqid=$_GET['inqId'];

$sql = "DELETE FROM inquiries WHERE User_ID='$userid' AND Inquiry_ID='$inqid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:./inquirytable.php');
}

?>