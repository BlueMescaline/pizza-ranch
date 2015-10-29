<?php
include('include/header.php');
///////////////////ITT ADUNK HOZZÁ AZ ADATBÁZISHOZ ÚJ FELHASZNÁLÓT VAGY ADMINT
?>
    <h2><a href="#" onclick="history.back();" > Vissza</a><br/>
        <a href="add_user.php?type=user">Felhasználó regisztrálása</a><br/>
    <a href="add_user.php?type=admin">Admin regisztrálása</a><br/></h2>

<?php
if (isset($_GET['error']) and !empty($_GET['error'])) {
    $error=$_GET['error'];
    switch ($error)
    {
        case 1: echo "<b>Töltse ki az összes mezőt!</b>"; break;
        case 2: echo "<b>A felhasználónév már foglalt!</b>"; break;
        case 3: echo "<b>Két jelszó nem egyezik!</b>"; break;
        case 4: echo "<b>A jelszó túl rövid</b>"; break;

    }}
$form_user=<<<add
<form name="regisztracio" action="include/reg.php" method="post">
	<table>
		<tr style="height: 35px;"><td>Felhasználónév</td>
			<td><input type="text" class="reg_field" id="username" value="" name="username" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó <small>(6-16 karakter)</small></td>
			<td><input type="password" class="reg_field" id="passwd" value="" name="passwd" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó megerősítése</td>
			<td><input type="password" class="reg_field" id="passwd2" value="" name="passwd2" /></td>
		</tr>
		<tr style="height: 35px;"><td>Teljes név név</td>
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
		<tr style="height: 35px;"> <td colspan="2"><input type="submit" value="Regisztráció">
		                                            <input type="hidden" name="type" value="user"></td> </tr>
	</table>
</form>

add;
$form_admin=<<<add
<form name="regisztracio" action="include/reg.php" method="post">
	<table>
		<tr style="height: 35px;"><td>Felhasználónév</td>
			<td><input type="text" class="reg_field" id="username" value="" name="username" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó <small>(6-16 karakter)</small></td>
			<td><input type="password" class="reg_field" id="passwd" value="" name="passwd" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó megerősítése</td>
			<td><input type="password" class="reg_field" id="passwd2" value="" name="passwd2" /></td>
		</tr>
		<tr style="height: 35px;"><td>Teljes név név</td>
			<td><input type="text" class="reg_field" id="fullname" value="" name="fullname" /></td>
		</tr>
		<tr style="height: 35px;"><td>E-mail cím</td>
			<td><input type="email" class="reg_field" id="email" value="" name="email" /></td>
		</tr>
		<tr style="height: 35px;"><td>Telefon</td>
			<td><input type="text" class="reg_field" id="phone" value="" name="phone" /></td>
		</tr>
		<tr style="height: 35px;"> <td colspan="2"><input type="submit" value="Regisztráció"><input type="hidden" name="type" value="admin"></td> </tr>
	</table>
</form>

add;
if (isset($_GET['type']) and !empty($_GET['type'])) {
       $type=$_GET['type'];
    if($type=="user"){
        echo "<h3>Felhasználó regisztrálás</h3>";
        echo $form_user;
    }
    elseif($type=="admin"){
        echo "<h3>Admin regisztrálás</h3>";
        echo $form_admin;
    }
}


?>
    </div>;
<?php include('include/footer.php');?>
    </body
    </html>
<?php
