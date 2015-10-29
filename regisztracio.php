<?php require('include/header.php');
 ?>
<h1 align="center">Még nem rendelt tőlünk? Regisztráljon!</h1>
<form name="regisztracio" action="include/reg.php" method="post">
	<table>
		<tr style="height: 35px;"><td>Felhasználói név</td>
			<td><input type="text" class="reg_field" id="username" value="" name="username" /></td>
		</tr>
		
		<tr style="height: 35px;"><td>Jelszó <small>(6-16 karakter)</small></td>
			<td><input type="password" class="reg_field" id="passwd" value="" name="passwd" /></td>
		</tr>
		
		<tr style="height: 35px;"><td>Jelszó megerősítése</td>
			<td><input type="password" class="reg_field" id="passwd2" value="" name="passwd2" /></td>
		</tr>
				
		<tr style="height: 35px;"><td>Teljes név</td>
			<td><input type="text" class="reg_field" id="fullname" value="" name="fullname" /></td>
		</tr>		
		
		<tr style="height: 35px;"><td>E-mail cím</td>
			<td><input type="email" class="reg_field" id="email" value="" name="email" /></td>
		</tr>		
		
		<tr style="height: 35px;"><td>Telefon</td>
			<td><input type="text" class="reg_field" id="phone" value="" name="phone" /></td>
		</tr>
		<tr style="height: 35px;"><td>Cím</td>
			<td><input type="text" class="reg_field" id="addr" value="" name="address" /></td>
		</tr>
		<tr style="height: 35px;"> <td colspan="2"><input type="submit" value="Regisztrálok"></td> </tr>

	</table>
</form>

<?php

if (isset($_GET['error']) and !empty($_GET['error'])) {
    $error=$_GET['error'];
switch ($error)
{
    case 0: echo "<b>Új felhasználó regisztrálásához jelentkezzen ki!</b>"; break;
    case 1: echo "<b>Töltse ki az összes mezőt!</b>"; break;
    case 2: echo "<b>A felhaszbálónév már foglalt!</b>"; break;
    case 3: echo "<b>Két jelszó nem egyezik!</b>"; break;
    case 4: echo "<b>A jelszó túl rövid</b>"; break;

}}

?>

</div>
<?php require('include/footer.php');?>

</body>
</html>
