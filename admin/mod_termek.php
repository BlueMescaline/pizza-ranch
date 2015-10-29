<?php include('include/header.php');
////////   Ezen az oldalon listázódnak ki a termékek amikre kattintva módosítani vagy törölni lehet őket //////////
?>


<h3><a href="termekek.php">Vissza</a></h3>
<?php


if(isset($_GET['error']) and !empty($_GET['error'])){
  $error=$_GET['error'];
    switch ($_GET['error'])
    {
        case 1: echo "<b>1 Termék sikeresen eltávolítva</b><br/>"; break;
        case 2: echo "<b>Termék sikeresen módosítva</b><br/>"; break;
        case 3: echo "<b>A módosításhoz minden mezőt ki kell tölteni, próbáld újra!</b><br/>"; break;
    }
}

/*
 * Ez a függvény listázza a termékeket az adatbázisból
 */
    list_all();

?>

</div>;
<?php include('include/footer.php');?>
</body
</html>
