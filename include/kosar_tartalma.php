<?php
include('db_config.php');

//kosár tartalma a header-be ágyazva
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

            $vegosszeg=0;
            echo "<table> <tr> <td> Nev </td><td> Összeg </td></tr>";

            foreach ($_SESSION['kosar'] as $id => $db){
                $ossz=$termek[$id]['ar']*$db;
              //  $vegosszeg+=$ossz;
                echo "<tr><td>".$termek[$id]['nev']."(".$termek[$id]['meret']."cm)(".$db."db)</td><td>$ossz Ft</td>";
            }
            echo"</table>";
        }
}
else {
    echo"A kosár jelenleg üres.";
}
