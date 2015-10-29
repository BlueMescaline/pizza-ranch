<?php
include('include/header.php');
//include('include/fuggvenyek.php');
echo "<h2>Rendelések</h2>";
if (isset($_POST['torles']) and !empty($_POST['rend'])){
    $id=$_POST['rend'];
delete_order($id);

}

list_orders();



?>

</div>;
<?php include('include/footer.php');?>
</body
</html>
