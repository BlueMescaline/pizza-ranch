<?php
include('include/header.php');
require('include/db_config.php');
?>
<h2><a href="#" onclick="history.back();" > Vissza</a></h2><br/>

<?php

if (isset($_GET['type']) and !empty($_GET['type'])) {
    $type=$_GET['type'];

//////ha FELHASZNALOT akarunk torolni/ modositani
        if($type=="user"){
            /////////////MÓDOSÍTÁS
            if (isset($_POST['modosit'])){
                echo "<h3>Felhasználó módosítás</h3>";
               ///id alapján a form-ba tölti a kiválasztott user eddigi adatait
                $id=$_POST['id'];
                global $connection;
                $sql="SELECT * FROM users WHERE user_ID='$id'";
                $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
                if (mysqli_num_rows($result)>0){
                    $record = mysqli_fetch_array($result);
                    $form_user=<<<add
<form name="regisztracio" action="include/user_mentes.php" method="post">
	<table>
		<tr style="height: 35px;"><td>Felhasználónév</td>
			<td><input type="text" class="reg_field" id="username" value="$record[username]" name="username" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó <small>(6-16 karakter)</small></td>
			<td><input type="password" class="reg_field" id="passwd" value="$record[password]" name="passwd" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó megerősítése</td>
			<td><input type="password" class="reg_field" id="passwd2" value="$record[password]" name="passwd2" /></td>
		</tr>
		<tr style="height: 35px;"><td>Teljes név</td>
			<td><input type="text" class="reg_field" id="fullname" value="$record[fullname]" name="fullname" /></td>
		</tr>
		<tr style="height: 35px;"><td>E-mail cím</td>
			<td><input type="email" class="reg_field" id="email" value="$record[email]" name="email" /></td>
		</tr>
		<tr style="height: 35px;"><td>Telefon</td>
			<td><input type="text" class="reg_field" id="phone" value="$record[phone]" name="phone" /></td>
		</tr>
		<tr style="height: 35px;"><td>Cím</td>
			<td><input type="text" class="reg_field" id="addr" value="$record[address]" name="address" /></td>
		</tr>
		<tr style="height: 35px;"> <td colspan="2"><input type="submit" value="Regisztráció">
		                                            <input type="hidden" name="type" value="user">
		                                             <input type="hidden" name="id" value="$id"></td></tr>
	</table>
</form>

add;
                     echo $form_user;
                //////////////////////////////////////////////////////////////
             }}
/////////////TÖRLÉS
             if (isset($_POST['torol'])){
                $id=$_POST['id'];
                $sql="DELETE FROM users WHERE user_ID='$id'";
                $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
                header('Location:users.php?error=2'); //nem hiba, sikerült a törlés
        }

    }
///////////////////
//////ha ADMINT akarunk torolni/ modositani
        elseif($type=="admin"){
/////////////MÓDOSÍTÁS
            if (isset($_POST['modosit'])){
                echo "<h3>Admin módosítás</h3>";
                ///id alapján a form-ba tölti a kiválasztott admin eddigi adatait
                $id=$_POST['id'];
                global $connection;
                $sql="SELECT * FROM admins WHERE admin_ID='$id'";
                $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
                if (mysqli_num_rows($result)>0){
                    $record = mysqli_fetch_array($result);
                    $form_admin=<<<add
<form name="regisztracio" action="include/user_mentes.php" method="post">
	<table>
		<tr style="height: 35px;"><td>Felhasználónév</td>
			<td><input type="text" class="reg_field" id="username" value="$record[username]" name="username" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó <small>(6-16 karakter)</small></td>
			<td><input type="password" class="reg_field" id="passwd" value="$record[password]" name="passwd" /></td>
		</tr>
		<tr style="height: 35px;"><td>Jelszó megerősítése</td>
			<td><input type="password" class="reg_field" id="passwd2" value="$record[password]" name="passwd2" /></td>
		</tr>
		<tr style="height: 35px;"><td>Teljes név név</td>
			<td><input type="text" class="reg_field" id="fullname" value="$record[fullname]" name="fullname" /></td>
		</tr>
		<tr style="height: 35px;"><td>E-mail cím</td>
			<td><input type="email" class="reg_field" id="email" value="$record[email]" name="email" /></td>
		</tr>
		<tr style="height: 35px;"><td>Telefon</td>
			<td><input type="text" class="reg_field" id="phone" value="$record[phone]" name="phone" /></td>
		</tr>
		<tr style="height: 35px;"> <td colspan="2"><input type="submit" value="Regisztráció">
		                                            <input type="hidden" name="type" value="admin"></td> </tr>
		                                             <input type="hidden" name="id" value="$record[admin_ID]"></td></tr>

	</table>
</form>

add;
                    echo $form_admin;
            }
            }
/////////////TÖRLÉS
            if (isset($_POST['torol'])){
                $id=$_POST['id'];
                $sql="DELETE FROM admins WHERE admin_ID='$id'";
                $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
                header('Location:admins.php?error=2'); //nem hiba, sikerült a törlés
            }
        }

}
?>

</div>;
<?php include('include/footer.php');?>
</body
</html>
