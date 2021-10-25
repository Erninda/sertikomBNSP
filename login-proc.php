<?php
ob_start();
session_start();
include "connect.php";
$user=$_GET['user'];
$pwd=$_GET['pwd'];

$sql="SELECT * FROM user WHERE user='$user' AND pwd='$pwd'";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);

if($check>0){
    $_SESSION['status']='login';
    header('Location: login.php');
}else{
    $_SESSION['status']='';
    header('Location: login.php');
}
ob_end_flush();
?>
