<?php
session_start();
//$location=$_SERVER['HTTP_REFERER'];
require("db_config.php");

$login_username =mysqli_real_escape_string($connection,$_POST['login_username']);
$login_password =mysqli_real_escape_string($connection,$_POST['login_password']);
$password= md5($login_password);
@$location=$_POST['loc'];

if (!empty($login_username) and !empty($login_password)){
    $sql = "SELECT * FROM users WHERE username = '$login_username' AND password= '$password' AND status=1";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if (mysqli_num_rows($result)>0)
    {
        while ($record = mysqli_fetch_array($result))
            {
                $_SESSION['user_ID'] = $record['user_ID'];
              //echo "!!!!!!!!!!!!!!!!!!!!!!!!user_ID=$record[user_ID]\n";
              header("Location:../$location");
            }
    }
else
    {
        //   echo"Felhasználónáv, vagy jelszó nem egyezik!";
        header("Location:../$location?errlog=1");
//exit();
    }
}
else{
   // echo "A bejelentkezéshez mindkét mező kitöltése szükséges!";
    header("Location:../$location?errlog=2");
  //  exit();
}

?>