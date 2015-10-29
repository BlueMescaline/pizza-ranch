
<?xml version="1.0" encoding="UTF-8"?>
<?php

require('fuggvenyek.php');
//require('kosarba.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
<head>
    <title>Pizzéria</title>
    <link rel="stylesheet" type="text/css" href="include/style2.css"/>
</head>

<body>
<div id="heading"><a href="index.php"><img width="270" height="185" src="../images/Pizza_Ranch_logo.png" alt="home" /></a></div>

</div>

<div id="container">
    <?php
    log_error_handling();
    ?>
    <div class="kartya">
        <?php
        session_start();
        if(isset($_SESSION['admin_ID'])){
            echo "Bejelentkezve!";
            $name = get_user_name($_SESSION['admin_ID']);
            echo "<h3>$name</h3>";
            echo "<a href=\"include/logout.php\" >Kijelentkezés</a>&nbsp; ";

        }
        else{
            $location=basename($_SERVER['PHP_SELF']);

            echo    "<form name=\"login\" method=\"post\" action=\"include/login.php\">";
            echo	"Jelentkezz be!<br/>";
            echo	"Felhasználói név: <br/> <input name=\"login_username\" type=\"text\" value=\"\"  /><br/>";
            echo	"Jelszó: <br/><input name=\"login_password\" type=\"password\" value=\"\" /><br/>";
            echo	"<input id=\"login_button\" type=\"submit\" value=\"Belépés\"/>";
            echo    "<inut type=\"hidden\" name=\"loc\" value=$location/>";
            echo	"</form>";
        }
        ?>
    </div>


    </div>
