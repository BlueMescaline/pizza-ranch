<?php
require("db_config.php");
session_start();

    if(isset($_POST['id'])){
        $id=$_POST['id'];
        $_SESSION['kosar'][$id]= $_SESSION['kosar'][$id]+1;
    }
    else{
        echo "HIBA!";
    }
header("Location:../kajak.php");