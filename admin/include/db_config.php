﻿<?php
   
$host = "localhost";
$user_db = "root";
$password_db = "";
$database = "pizzeria";

$connection = mysqli_connect("$host", "$user_db", "$password_db", "$database");

if (!$connection) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
mysqli_query($connection,"SET NAMES utf8");
mysqli_query($connection,"SET CHARACTER SET utf8");
mysqli_query($connection,"SET COLLATION_CONNECTION='utf8_general_ci'");

//mysqli_close($connection);
?>