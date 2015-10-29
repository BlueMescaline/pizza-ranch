<?php
include('include/header.php');

require('include/db_config.php');

    if (isset($_POST['modosit'])){
//////////Módosításhoz itt kiolvassa a megfelelő termék adatait $id alapján, azt rakja a FORM-ba, hogy ott át lehessen írni ///
        $id=$_POST['id'];
        global $connection;
       $sql="SELECT * FROM pizzak_24 WHERE pizza_ID='$id'";
    $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if (mysqli_num_rows($result)>0){
            $record = mysqli_fetch_array($result);
////////////A form a módosított adatokat tovább küldi a mentes.php oldalra, ami elmenti őket, felülírja az adott sort////
            $form=<<<form
<h3><a href="mod_termek.php">Vissza</a></h3>
<h3>Termék módosítása</h3>

<form method=post action=include/mentes.php>
    <table width="50%">
        <tr><td width="100px">Név: </td>       <td> <input type="text" name="nev" value="$record[nev]"/></td></tr>
        <tr><td>Feltét: </td>    <td> <textarea style="resize:none" cols="40" rows="3" name="feltet"/>$record[feltet]</textarea></td></tr>
        <tr><td>Méret: </td>    <td><select name="meret" default>
                    <option value="24">24 cm</option>
                    <option value="28">28 cm</option>
                    <option value="32">32 cm</option>
                </select></td></tr>
        <tr><td>Ár: </td>  <td> <input type="text" name="ar" value="$record[ar]"/></td></tr>

    </table>
    <input type="hidden" name="id" value="$id"/>
    <input type="submit" name="mentes" value="Mentés"/>
    <input type="reset" value="Reset"/>
    <input type="hidden" name="muvelet" value="regi"/>

</form>
form;
             echo $form;
    }
    }
////////////////////////////////////////////////////////

////////////ha a törlést nyomtuk meg, szintén a kapott id alapján kitörli a sort az adatbázisból//////
    if (isset($_POST['torol'])){
        $id=$_POST['id'];
        $sql="DELETE FROM pizzak_24 WHERE pizza_ID='$id'";
        $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
        header('Location:mod_termek.php?error=1'); //nem hiba, sikerült a törlés

    }



        ?>