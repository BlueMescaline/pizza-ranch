<?php
include('include/header.php');

?>
    <h2><a href="felhasznalok.php"> Vissza</a><br/>
        <a href="add_user.php?type=admin">Admin regisztrálása</a><br/>
        <a href="add_user.php?type=user">Felhasználó regisztrálása</a><br/></h2>


<?php
if (isset($_GET['error']) and !empty($_GET['error'])) {
    switch ($_GET['error']){
        case 1: echo "<b>Sikeres regisztráció. E-mail elküldve a megadott címre.</b>";break;
        case 2: echo "<b>1 admin sikeresen törölve.</b>";break;
        case 3: echo "<b>1 admin sikeresen módosítva.</b>";break;
        case 4: echo "<b>Update nem sikerült. Nem töltötte ki az összes mezőt!</b>"; break;
        case 5: echo "<b>Két jelszó nem egyezik!</b>"; break;
        case 6: echo "<b>A jelszó túl rövid</b>"; break;
    }
}
list_admins();

?>
    </div>;
<?php include('include/footer.php');?>
    </body
    </html>