<?php

   session_start();

   session_destroy();

   unset($_SESSION["user_ID"]);

   header("Location:../index.php");
   exit();

?>