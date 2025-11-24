<?php
session_start();
require_once('./connection.php');

$userid = $_SESSION['userid'];

$newpass=$_POST['userpassword'];
$uname=$_POST['uname'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$status=$_POST['status'];

$sql1 = "UPDATE registered_user SET Username='$uname' WHERE User_ID='$userid'";
$sql2 = "UPDATE registered_user SET User_Password='$newpass' WHERE User_ID='$userid'";
$sql3 = "UPDATE registered_user SET F_Name='$firstname' WHERE User_ID='$userid'";
$sql4 = "UPDATE registered_user SET L_Name='$lastname' WHERE User_ID='$userid'";
$sql5 = "UPDATE registered_user SET Privilage_Status='$status' WHERE User_ID='$userid'";
$sql6 = "UPDATE registered_user SET Contact_No='$contact' WHERE User_ID='$userid'";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);
$result6 = mysqli_query($conn, $sql6);

if($result1 && $result2 && $result3 && $result4 && $result5 && $result6) {
    header('Location: ./login_page.php?update=true');
    echo '<script>setTimeout(function() { alert("Account Information Successfully Updated..!");}, 1000); </script>';
}



?>