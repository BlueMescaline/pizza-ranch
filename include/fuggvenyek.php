<?php
require("db_config.php");

// Felhasználónév ellenőrzése. (Foglalt-e?)
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

//felhasználónév kiolvasása
function get_user_name($user_id)
{
    global $connection;
    $sql = "SELECT username FROM users WHERE user_ID = '$user_id'";
    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
    {
        while ($record = mysqli_fetch_array($result))
            $name = $record['username'];
    }
    return $name;
}
//pizzák listázása megadott méret szerint
function list_pizzas($meret){
    global $connection;
    echo "<h3 align=\"center\">$meret cm-es pizzak</h3>";
    $sql="SELECT * FROM pizzak_24 WHERE meret='$meret'";
    $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0){
        echo "<table align=\"center\" border=\"0\" width=\"600\">
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
            else{
                $row_color="E3D398";}
    ///
        echo "<tr bgcolor=\"$row_color\" height=\"60px\"><td>$record[nev]</td> <td>$record[feltet]</td><td>$record[ar]Ft</td>";
        echo "<td><form name='kosarba' method='post' action='include/kosarba.php'>
                    <input type='hidden' name='id'  value='$record[pizza_ID]'>
                    <input type='submit' name='kosarba' value='Kosárba'></form></td>";
        echo  "</tr>\n";
        $row_tmp++;
    }
echo"</table>";
}

//bejelentkezési hibakezelés
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
//akciós termék kiválasztása
//visszaadja az akcios termék nevét
function akcios_ajanlat($most,$akcios){
    global $connection;
    $kesobb = date('i', strtotime(' +10 min '));

    if( $most <= $kesobb ){
        $sql = "SELECT nev FROM pizzak_24 WHERE pizza_ID = '$akcios'";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result)>0)
        {
            $record = mysqli_fetch_array($result);
            $_SESSION['akcios']=$record['nev'];
            return $record['nev'];

        }
    }
    else{
        $most= date('i');
        $kesobb = date('i', strtotime($most .' +10 min '));
        $akcios=mt_rand(128, 189);

        $sql = "SELECT nev FROM pizzak_24 WHERE pizza_ID = '$akcios'";
        $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result)>0)
        {
            $record = mysqli_fetch_array($result);
            $_SESSION['akcios']=$record['nev'];
            return $record['nev'];
        }
    }

}