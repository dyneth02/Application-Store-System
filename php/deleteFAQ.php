<?php
require_once('./connection.php');

$userid=$_GET['userId'];
$fid=$_GET['faqId'];

$sql = "DELETE FROM faq WHERE User_ID='$userid' AND FAQ_ID='$fid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:./faqtable.php');
}

?>