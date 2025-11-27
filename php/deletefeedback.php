<?php
require_once('./connection.php');

$userid=$_GET['userId'];

$sql = "DELETE FROM feedback WHERE User_ID='$userid'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:feedbacktable.php');
}

?>