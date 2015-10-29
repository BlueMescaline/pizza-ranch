<?php
include('include/header.php');
if (isset($_GET['error']) and !empty($_GET['error'])) {
$error=$_GET['error'];
switch ($error)
{
    case 1: echo "<b>A *-gal jelölt mezők kitöltése kötelező!</b>"; break;
    case 2: echo "<b>A felhaszbálónév már foglalt!</b>"; break;
    case 3: echo "<b>Két jelszó nem egyezik!</b>"; break;
    case 4: echo "<b>A jelszó túl rövid</b>"; break;
}}

if (!isset($_SESSION['user_ID']) and empty($_SESSION['user_ID'])){
    echo "<h2>Rendelés feladása</h2>";

    echo "Jelentkezzen be, vagy <a href=\"regisztracio.php\">regisztráljon</a>, hogy véglegesítse megrendelését.<br/>
Ha módosítani szeretné megrendelését, <a href=\"kosarnezet.php\">ide kattintva megteheti</a>.<br/><br/>

<p><b>Korábban már rendelt nálunk? Lépjen be!</b></p><br/>";

    echo    "<form name=\"login\" method=\"post\" action=\"include/login.php\">";
    echo	"felhasználói név: <br/> <input name=\"login_username\" type=\"text\" value=\"\"  /><br/>";
    echo	"jelszó: <br/><input name=\"login_password\" type=\"password\" value=\"\" /><br/>";
    echo	"<input id=\"login_button\" type=\"submit\" value=\"Belépés\"/>";
    echo	"<input id=\"registration_button\" type=\"button\" value=\"Regisztráció\" onclick=\"document.location='regisztracio.php'\"/><br/>";
    echo    "<p><input type=\"button\"  value=\"Elfelejtette jelszavát?\" onclick=\"document.location='regisztracio.php'\"</p>";
    echo	"</form>";
}
else{
    echo "<h2>Rendelés feladása</h2>";
    include('include/kosar_tartalma.php');
    echo "<br/><b>Végösszeg = $vegosszeg .-Ft</b><br/>";
    echo"<br/>";
    echo"<h3>Szállítási cím:</h3>";
    echo"<form method=\"post\" action=\"rend_feldolg.php\">";

       $szallitas=<<< adatok
<table>
<tr><td>*Település:<input type="text" name="telepules"/></td>
    <td>*Irányítószám:<input type="text" name="iranyitoszam"/></td>
</tr>

<tr><td>*Utca:<input type="text" name="utca"/></td>
    <td>*Házszám:<input type="text" name="hazszam"/></td>
</tr>
<tr><td>Emelet, ajtó:<input type="text" name="emelet"/></td>
    <td>Kapucsengő:<input type="text" name="csengo"/></td>
</tr>
<tr><td colspan="2" align="center">*E-mail:<input type="text" name="email"/></td>
</tr>
<tr><td colspan="2" align="center">*Telefon:<input type="text" name="telefon"/></td>
</tr>
<tr><td colspan="2" align="center">Megjegyzés:<input type="textarea" name="megjegyzes"/></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" name="rendeles" value="Rendelés feladása"/></td></tr>
</table>

adatok;

    echo $szallitas;
}
 ?>
</div>
<?php include('include/footer.php');?>
</body>
</html>