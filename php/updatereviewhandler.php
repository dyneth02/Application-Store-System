<?php
require_once('connection.php');


if(!isset($_SESSION['userid'])) {
    header('Location:./login_page.php');
}

$uname=$_GET['uname'];
$newcontent=$_POST['review'];


$sql = "UPDATE reviews SET Review='$newcontent' WHERE User_Name='$uname'";

$result = mysqli_query($conn,$sql);

if($result){
    header('Location:./reviewtable.php');
}

?>