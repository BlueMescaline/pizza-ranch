<?xml version="1.0" encoding="UTF-8"?>
<?php
//$_SESSION['location']=basename($_SERVER['PHP_SELF']);
require('fuggvenyek.php');
//require('kosarba.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
<head>
	<title>Pizzéria</title>
	<link rel="stylesheet" type="text/css" href="include/style.css"/>
</head>

<body>
<div id="heading"><a href="index.php"><img width="270" height="185" src="../images/Pizza_Ranch_logo.png" alt="home" /></a></div>
<div class="menu" align="center"><a class="hetimenu" href="rendelesek.php">Rendelések</a>		<img  src="../images/menu_divider.png"/>
								<a class="akciok" href="termekek.php">Termékek</a>						<img  src="../images/menu_divider.png"/>
								<a class="rendeles" href="felhasznalok.php">felhasználók</a>					<img  src="../images/menu_divider.png"/>
								</div>
<div id="container">
 <?php
 log_error_handling();
 ?>
<div id="oldal"> 
			<div class="kartya">
            <?php
            $location=basename($_SERVER['PHP_SELF']);
            session_start();
            if(isset($_SESSION['admin_ID'])){
                echo "Bejelentkezve!";
                $name = get_user_name($_SESSION['admin_ID']);
                echo "<h3>$name</h3>";
                echo "<a href=\"include/logout.php\" >Kijelentkezés</a>&nbsp; ";
                echo "<p>Mai Dátum:</br>".date("Y-m-d l")."</p>";         // 2001-03-10 17:16:18 (the MySQL DATETIME format)


            }
            else{
                header("Location:login_page.php");

            }
?>
			</div>
			<div class="kartya">
                <table>
                    <tr valign="top"><td><b>Nytvatartás:</b></td>
                        <td align="right">H-Szo: 12h-23h<br/>Vas: 12h-22h</td>
                    </tr>
                    <tr valign="top"><td><b>Kiszállítás:</b></td>
                        <td align="right">H-Szo: 10h-22h30<br/>Vas: 10h-21h30</td>
                    </tr>
                    <tr><td>Tel.: </td><td align="right">555-132,  555-234</td></tr>
                    <tr><td>Cím: </td><td align="right">24000 - Szabadka, Marka Oreškovića 16</td></tr>

                </table>
			</div>

</div>