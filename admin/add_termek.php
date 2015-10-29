<?php
include('include/header.php');
?>
<h3><a href="termekek.php">Vissza</a></h3>

<h1>Termék hozzáadása</h1>
<form method=post action=include/mentes.php>
    <table width="50%">
        <tr><td>Név: </td>  <td> <input type="text" name="nev"/></td></tr>
        <tr><td>Feltét: </td>  <td> <textarea name="feltet"/></textarea></td></tr>
        <tr><td>Méret: </td>  <td><select name="meret">
                    <option value="24">24 cm</option>
                    <option value="28">28 cm</option>
                    <option value="32">32 cm</option>
                </select></td></tr>
        <tr><td>Ár: </td>  <td> <input type="text" name="ar"/></td></tr>

    </table>
    <input type="submit" name="mentes" value="Mentés"/>
    <input type="reset" value="Reset"/>
    <input type="hidden" name="muvelet" value="uj"/>

</form>
<?php
if(isset($_GET['error']) and !empty($_GET['error'])){
switch ($_GET['error'])
{
    case 1: echo "<b>A mentéshez minden mezőt ki kell tölteni!</b>"; break;
    case 2: echo "<b>Már létezik ilyen termék!</b>"; break;
    case 3: echo "<b>Új termék hozzáadva!</b>"; break;
}
}
?>

</div>;
<?php include('include/footer.php');?>
</body
</html>
