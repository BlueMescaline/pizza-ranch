<?php
include("db_config.php");

$username=$_GET['u'];
$user_id=$_GET['id'];
$code=$_GET['code'];
$now=date('Y-m-d');


$sql="UPDATE users SET status=1 WHERE user_ID='$user_id' AND code='$code' AND username='$username' AND status=0";
$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
header("Location:../index.php")
?>
