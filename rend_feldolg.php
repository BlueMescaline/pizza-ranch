<?php
include('include/header.php');
include('include/db_config.php');

$telepules = mysqli_real_escape_string($connection,$_POST['telepules']);
$iranyitoszam= mysqli_real_escape_string($connection,$_POST['iranyitoszam']);
$utca = mysqli_real_escape_string($connection,$_POST['utca']);
$hazszam = mysqli_real_escape_string($connection,$_POST['hazszam']);
$emelet_ajto = mysqli_real_escape_string($connection,$_POST['emelet']);
$kapucsengo = mysqli_real_escape_string($connection,$_POST['csengo']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$telefon = mysqli_real_escape_string($connection,$_POST['telefon']);
$megjegyzes = mysqli_real_escape_string($connection,$_POST['megjegyzes']);

/////hibakezeles
if (empty($telepules) || empty($iranyitoszam) || empty($utca) || empty($hazszam) || empty($email) || empty($telefon))
{
    header("Location:rendeles_leadasa.php?error=1");
}

else{
   // var_dump($_POST);
    $pizza_idk=implode(',',array_keys($_SESSION['kosar']) );
    $pizza_db= implode(',',$_SESSION['kosar']);
    $cim="$telepules $iranyitoszam, $utca $hazszam, $emelet_ajto, $kapucsengo";
    $userid=$_SESSION['user_ID'];
    $vegosszeg=$_SESSION['vegosszeg'];
    $datum=date("Y-m-d H:i:s");


        $sql="INSERT INTO rendelesek(username,pizzak,darabszam,cim,ar,datum) VALUES('$name','$pizza_idk', '$pizza_db', '$cim','$vegosszeg','$datum')";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


   echo "A rendelését sikeresen rögzítettük.<br/>A futárunk nemsokára megérkezik, köszönjük a vásárlást és jó étvágyat kívánunk!<br/>";
   echo "<a href=\"index.php\">Vissza az oldalra</a>";
   unset($_SESSION['kosar']);
}
?>
</div>
<?php include('include/footer.php');?>
</body>
</html>