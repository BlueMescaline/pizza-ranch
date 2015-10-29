<?php
include('include/header.php');
include('include/db_config.php');

if(isset($_POST['torol'])){
   // echo "<h1>".$_POST['id']."</h1>";
   unset($_SESSION['kosar'][$_POST['id']]);
}
if(isset($_SESSION['kosar']) and (!empty($_SESSION['kosar'])))
{
    $list=implode(',',array_keys($_SESSION['kosar']) );

    $sql="SELECT *  FROM pizzak_24 WHERE pizza_ID IN ($list) ";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0)
    {
        while($record = mysqli_fetch_array($result)){
            $termek[$record['pizza_ID']]=$record;
        }
        echo "<table width=\"500px\"><tr> <td><b> Termék </b></td><td><b> Mennyiség </b></td><td><b> Ár </b></td> <td><b> Összeg </b></td><td></td></tr>";
        $vegosszeg=0;

        foreach ($_SESSION['kosar'] as $id => $db){
            array_push($termek[$id],strval($db));
            $ossz=$termek[$id]['ar']*$db;

            echo "<tr align=\"center\"><td>".$termek[$id]['nev']."(".$termek[$id]['meret']."cm)"."</td><td>".$_SESSION['kosar'][$id]."db</td><td>".$termek[$id]['ar'].".-Ft</td> <td>$ossz.-Ft</td>\n";
            echo "<td><form action=\"kosarnezet.php\" method=\"post\"><input type=\"submit\" name=\"torol\" value=\"Törlés\"/><input type=\"hidden\" name=\"id\" value=\"$id\"/></form></td>";
            $vegosszeg+=$ossz;
        }
        }

        echo"<tr><td colspan=\"4\" align=\"right\"><b><hr/>Végösszeg = $vegosszeg .-Ft</b></td></tr>";
        echo"</table>";
    echo"<h2> <a href=\"rendeles_leadasa.php\"><h2>Rendelés elküldése</h2></a>";
    $_SESSION['vegosszeg']=$vegosszeg;
}

else {
    echo"<h1>A kosár jelenleg üres.</h1>";
}


?>