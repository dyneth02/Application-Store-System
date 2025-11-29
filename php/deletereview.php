<?php
require_once('./connection.php');

$uname=$_GET['uname'];
$rid=$_GET['reId'];

$sql = "DELETE FROM reviews WHERE User_Name='$uname' AND Review_ID='$rid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:./reviewtable.php');
}

?>