<?php
require("db_config.php");

/*
 *  Felhasználónév ellenőrzése. (Foglalt-e?)
 *
*/

function check_register_user($username)
{
    global $connection;
    $sql = "SELECT user_ID FROM users WHERE username = '$username'";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
        return true;
    else
        return false;
}
/*
 *  Felhasználónév ellenőrzése. (Foglalt-e?)
 * ADMIN név
*/

function check_register_admin($username)
{
    global $connection;
    $sql = "SELECT admin_ID FROM admins WHERE username = '$username'";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
        return true;
    else
        return false;
}




/*
 * A bejelentkezett admin nevét kikeresi és kiírja, jelezve, hogy be van jelentkezve
 */
function get_user_name($admin_id)
{
    global $connection;
    $sql = "SELECT username FROM admins WHERE admin_ID = '$admin_id'";
    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
    {
        while ($record = mysqli_fetch_array($result))
            $name = $record['username'];
    }
    return $name;

}

function check_add_termek($nev)
{
    global $connection;
    $sql = "SELECT pizza_ID FROM pizzak_24 WHERE nev = '$nev'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if (mysqli_num_rows($result)>0)
        return true;
    else
        return false;
}


/*
 * Kilistázza az összes $meret méretű pizzát
 * a sor végén a FORM-mal küldjük a kiválasztott pizza ID-t és, hogy töröljük, vagy módosítjuk
 */
function list_pizzas($meret){
    global $connection;
    echo "<h3 align=\"center\">$meret cm-es pizzak</h3>";
    $sql="SELECT * FROM pizzak_24 WHERE meret='$meret'";
    $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0){
        echo "<div id=\"$meret\"><table align=\"center\" border=\"0\" width=\"600\">
          <tr><td align=\"left\"><b>Név</b></td>
              <td align=\"left\"><b>Feltét</b></td>
              <td align=\"left\"><b>Ár</b></td>
          </tr>\n";
    }
    //sorok szinei
    $row_tmp=0;
    while ($record = mysqli_fetch_array($result)){
        if ($row_tmp%2>0){
            $row_color="#EEE6BB";}
            else{ $row_color="E3D398";}


        //$pizza_tabla="pizzak_".$meret;
        echo "<tr bgcolor=\"$row_color\" height=\"60px\"><td>$record[nev]</td> <td>$record[feltet]</td><td>$record[ar]Ft</td>";
        echo "<td><form name='modositas' method='post' action='mod.php'>
                    <input type='hidden' name='id'  value='$record[pizza_ID]'>
                    <input type='submit' name='modosit' value='Módosít'>
                    <input type='submit' name='torol' value='Töröl'>
        </form></td>";
        echo  "</tr>\n";
        $row_tmp++;
    }
echo"</table></div>";
}



function list_all(){
    $navigacio=<<< linkek
<a href='#24'>24 cm-es pizzák</a>||\n
<a href='#28'>28 cm-es pizzák</a>||\n
<a href='#32'>32 cm-es pizzák</a>\n||\n
<a href='#heading'>Az oldal tetejére</a>
linkek;
    echo $navigacio;
list_pizzas(24);
    echo $navigacio;
list_pizzas(28);
    echo $navigacio;
list_pizzas(32);

}

function log_error_handling(){
    //aktuális oldal nevének megjegyzése, hogy ugyanide irányírson vissza
  // $_SESSION['location']=basename($_SERVER['PHP_SELF']);
   // echo "<h1>".$_SESSION['location']."</h1>";
    @$errlog=$_GET['errlog'];
   if(isset($errlog)){
        if($errlog==1){
            echo"<h3>Felhasználónáv, vagy jelszó nem egyezik!</h3>";
        }
        if($errlog==2){
            echo"<h3>A bejelentkezéshez mindkét mező kitöltése szükséges!</h3>";
        }

    }
}
function list_orders(){
    global $connection;

    $sql="SELECT * FROM rendelesek";
    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
    {

        echo"<table width=\"740px\" ><tr><td>rend_ID</td><td>Username</td><td>Pizzak</td><td>db</td><td>Cím</td><td>Ár</td><td>Dátum</td><td></td></tr>";
        while ($record = mysqli_fetch_array($result)){
            echo"<tr><td>$record[rend_ID]</td>
            <td>$record[username]</td>
            <td>$record[pizzak]</td>
            <td>$record[darabszam]</td>
            <td>$record[cim]</td>
            <td>$record[ar]</td>
            <td>$record[datum]</td>\n";
            echo"<td><form method=\"post\"><input type=\"submit\" name=\"torles\" value=\"törlés\"/>
                                           <input type=\"hidden\" name=\"rend\" value=\"$record[rend_ID]\"/></form>
                 </td></tr>";
        }
        echo"</table>";

    }
}

function delete_order($rendid){
    global $connection;
    $sql="DELETE FROM rendelesek WHERE rend_ID='$rendid'";
    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
/*
    if (mysqli_num_rows($result)>0)
    {
        echo"<table width=\"500px;\"><tr><td>rend_ID</td><td>pizza_ID</td><td>user_ID</td><td>cim</td><td></td></tr>";
        while ($record = mysqli_fetch_array($result)){
            echo"<tr><td>$record[rend_ID]</td><td>$record[pizza_ID]</td><td>$record[pizza_ID]</td><td>$record[cim]</td>";
            echo"<td><form method=\"post\"><input type=\"submit\" name=\"torles\" value=\"törlés\"/>
                                           <input type=\"hidden\" name=\"rend\" value=\"$record[rend_ID]\"/>
            </form></td></tr>";
        }
        echo"</table>";
    }
*/
}

/*
 * Kilistázza az összes felhasználót
 * a sor végén a FORM-mal küldjük a kiválasztott user ID-t és, hogy töröljük, vagy módosítjuk
 */
function list_users(){
    global $connection;
    $sql="SELECT * FROM users";
    $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0){
        echo "<table align=\"center\" >
          <tr><td align=\"left\"><b>Felhasználónév</b></td>
              <td align=\"left\"><b>Jelszó</b></td>
              <td align=\"left\"><b>Teljes név</b></td>
              <td align=\"left\"><b>E-mail</b></td>
              <td align=\"left\"><b>Telefon</b></td>
              <td align=\"left\"><b>Cím</b></td>
              <td align=\"left\"><b>Státusz</b></td>
          </tr>\n";
    }
    //sorok szinei
    $row_tmp=0;
    while ($record = mysqli_fetch_array($result)){
        if ($row_tmp%2>0){
            $row_color="#EEE6BB";}
        else{ $row_color="E3D398";}
        //$pizza_tabla="pizzak_".$meret;
        echo "<tr bgcolor=\"$row_color\" height=\"60px\"><td>$record[username]</td><td>$record[password]</td><td>$record[fullname]</td><td>$record[email]</td><td>$record[phone]</td><td>$record[address]</td><td>$record[status]</td>";
        echo "<td><form name='modositas' method='post' action='user_mod.php?type=user'>
                    <input type='hidden' name='id'  value='$record[user_ID]'>
                    <input type='submit' name='modosit' value='Módosít'>
                    <input type='submit' name='torol' value='Töröl'>
        </form></td>";
        echo  "</tr>\n";
        $row_tmp++;
    }
    echo"</table></div>";
}


/* Kilistázza az összes ADMINT
* a sor végén a FORM-mal küldjük a kiválasztott user ID-t és, hogy töröljük, vagy módosítjuk
*/
function list_admins(){
    global $connection;
    $sql="SELECT * FROM admins";
    $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0){
        echo "<table align=\"center\" >
          <tr><td align=\"left\"><b>Felhasználónév</b></td>
              <td align=\"left\"><b>Jelszó</b></td>
              <td align=\"left\"><b>Teljes név</b></td>
              <td align=\"left\"><b>E-mail</b></td>
              <td align=\"left\"><b>Telefon</b></td>
              <td align=\"left\"><b>Státusz</b></td>
          </tr>\n";
    }
    //sorok szinei
    $row_tmp=0;
    while ($record = mysqli_fetch_array($result)){
        if ($row_tmp%2>0){
            $row_color="#EEE6BB";}
        else{ $row_color="E3D398";}
        //$pizza_tabla="pizzak_".$meret;
        echo "<tr bgcolor=\"$row_color\" height=\"60px\"><td>$record[username]</td><td>$record[password]</td><td>$record[fullname]</td><td>$record[email]</td><td>$record[phone]</td><td>$record[status]</td>";
        echo "<td><form name='modositas' method='post' action='user_mod.php?type=admin'>
                    <input type='hidden' name='id'  value='$record[admin_ID]'>
                    <input type='submit' name='modosit' value='Módosít'>
                    <input type='submit' name='torol' value='Töröl'>
        </form></td>";
        echo  "</tr>\n";
        $row_tmp++;
    }
    echo"</table></div>";
}

