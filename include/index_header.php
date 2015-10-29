
<?php
//$_SESSION['location']=basename($_SERVER['PHP_SELF']);
require('fuggvenyek.php');
//require('kosarba.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
<head>
    <title>Pizza Ranch pizzéria</title>
    <link rel="stylesheet" type="text/css" href="include/index_style.css"/>

    <meta name="keywords" content=" Pizzaranch, Ranch, pizza, pizzéria, rendelés, pizza rendelés, étterem,online pizzéria, online pizza" />
    <meta name="author" content="Széll Róbert" />
    <meta name="description" content="Pizzéria varázslatos ízekkel, akciókkal, online renelési lehetőséggel, " />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8" />
    <meta http-equiv="Content-language" content="hungarian" />

</head>

<body>
<div id="heading"><a href="index.php"><img width="270" height="185" src="images/Pizza_Ranch_logo.png" alt="home" /></a></div>
<div class="menu" align="center"><a class="hetimenu" href="napi_ajanlatunk.php">Napi ajánlatunk</a>		<img  src="images/menu_divider.png"/>
    <a class="akciok" href="akciok.php">Akciók</a>						<img  src="images/menu_divider.png"/>
    <a class="rendeles" href="rendeles.php">Rendelés</a>					<img  src="images/menu_divider.png"/>
    <a class="etlap" href="rendeles.php">Étlap</a>								<img  src="images/menu_divider.png"/>
    <a class="terkep" href="terkep.php">Térkép</a>						<img  src="images/menu_divider.png"/>
    <a class="kapcsolat" href="kapcsolat.php">Kapcsolat</a></div>

<div class="index_kep">
    <div id="pakli">
    <div class="kartya">
        <?php
        session_start();
        if(isset($_SESSION['user_ID'])){
            echo "Bejelentkezve!";
            $name = get_user_name($_SESSION['user_ID']);
            echo "<h3>$name</h3>";
            echo "<a href=\"include/logout.php\" >Kijelentkezés</a>&nbsp; ";

        }
        else{
            $location=basename($_SERVER['PHP_SELF']);

            echo    "<form name=\"login\" method=\"post\" action=\"include/login.php\">";
            echo	"Adja le rendelését most!<br/>";
            echo	"felhasználói név: <br/> <input name=\"login_username\" type=\"text\" value=\"\"  /><br/>";
            echo	"jelszó: <br/><input name=\"login_password\" type=\"password\" value=\"\" /><br/>";
            echo	"<input id=\"login_button\" type=\"submit\" value=\"Belépés\"/>";
            echo	"<input id=\"registration_button\" type=\"button\" value=\"Regisztráció\" onclick=\"document.location='regisztracio.php'\"/>";
            echo    "<inut type=\"hidden\" name=\"loc\" value=$location/>";
            echo	"</form>";
        }
        ?>
    </div>
    <div class="kartya"><b>Akciós ajánlatnk</b><br/>
        <table>
            <tr><td><img src="images/tapasz.png"alt="tapasz"/></td>
                <td valign="top"><b>
        <?php
            $most=date('i');
            $akcios=mt_rand(128, 189);
        $_SESSION['akcios']= akcios_ajanlat($most,$akcios);
        echo $_SESSION['akcios'];
            ?>
                        32 cm-es pizza ajándék 1,25 l - es Coca-Colával</b>
                   <a href="kajak.php#32cm">Megrendelem</a>
                </td></tr>
        </table>
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
</div>

<div id="container">
    <?php
    log_error_handling();
    ?>

    <img src="images/pizzaporgeto.jpg" alt="pizzaporgeto" width="" height=""/>
    <h2>Ön még nem járt éttermünkben?</h2>
    <h3>Jöjjön el és meghívjuk egy italra!</h3>

    <p>Válasszon bőséges ételkínálatunkból:</p>
    <p><a href='kajak.php#24cm'>24 cm-es pizzák</a>||
        <a href='kajak.php#28cm'>28 cm-es pizzák</a>||
        <a href='kajak.php#32cm'>32 cm-es pizzák</a></p>


