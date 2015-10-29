<?php
require("db_config.php");
require("fuggvenyek.php");

$nev=mysqli_real_escape_string($connection,$_POST['nev']);
$feltet=mysqli_real_escape_string($connection,$_POST['feltet']);
$meret=mysqli_real_escape_string($connection,$_POST['meret']);
$ar=mysqli_real_escape_string($connection,$_POST['ar']);
$id=$_POST['id'];

if($_POST['muvelet']=="uj"){
    uj_mentese($nev, $feltet, $meret, $ar);
}

if($_POST['muvelet']=="regi"){
    regi_modositasa($id, $nev, $feltet, $meret, $ar);
}

/**
 *  ÚJ pizzát ad hozzá az adatbázishoz
 */
function uj_mentese($nev, $feltet, $meret, $ar){
if (!isset($_POST['mentes']) or empty($nev) or empty($feltet) or empty($meret) or empty($ar) ){
    header('Location:../add_termek.php?error=1');
}
elseif (check_add_termek($nev)){
    header('Location:../add_termek.php?error=2');
}
else{
    global $connection;
    $sql="INSERT INTO pizzak_24(nev, feltet, meret, ar) VALUES ('$nev','$feltet','$meret','$ar')";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    header('Location:../add_termek.php?error=3');
}
}

/**
 * a függvény MEGLÉVŐ pizzát módosít az adatbázisban
 */
function regi_modositasa($id, $nev, $feltet, $meret, $ar){
    if (!isset($_POST['mentes']) or empty($nev) or empty($feltet) or empty($meret) or empty($ar) ){
        header('Location:../mod_termek.php?error=3');
    }
    else{
        global $connection;
        $sql="UPDATE pizzak_24 SET nev='$nev', feltet='$feltet', meret= '$meret', ar='$ar' WHERE pizza_ID='$id'";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        header('Location:../mod_termek.php?error=2');
    }
}
