<?php
//include('include/db_config.php');

include('include/header.php');

$navigacio=<<< linkek
<a href='#24cm'>24 cm-es pizzák</a>||\n
<a href='#28cm'>28 cm-es pizzák</a>||\n
<a href='#32cm'>32 cm-es pizzák</a>\n||\n
<a href='#heading'>Az oldal tetejére</a>
linkek;
echo $navigacio;
echo"<h1>Étlapunk</h1>";

echo"Válasszon bőséges ételkínálatunkból!";

//echo "<h3>24 cm-es pizzák</h3>";
echo "<div id=\"24cm\">";
list_pizzas(24);
echo "</div>";

echo $navigacio;

//echo "<h3>24 cm-es pizzák</h3>";
echo "<div id=\"28cm\">";
    list_pizzas(28);
echo "</div>";

echo $navigacio;

//echo "<h3>24 cm-es pizzák</h3>";
echo "<div id=\"32cm\">";
    list_pizzas(32);
echo "</div>";

echo $navigacio;

?>
</div>
<?php include('include/footer.php');?>

</body>
</html>