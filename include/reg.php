    <?php
require("db_config.php");
require("fuggvenyek.php");

session_start();
$username=mysqli_real_escape_string($connection,$_POST["username"]);
$password=mysqli_real_escape_string($connection,$_POST["passwd"]);
$password_re=mysqli_real_escape_string($connection,$_POST["passwd2"]);
$fullname=mysqli_real_escape_string($connection,$_POST["fullname"]);
$email=mysqli_real_escape_string($connection,$_POST["email"]);
$phone=mysqli_real_escape_string($connection,$_POST["phone"]);
$address= mysqli_real_escape_string($connection,$_POST['address']);
//$captcha=$_POST["code"];

//kód készítés
$down = 65;
$up = 90;
$i = 0;
$code = "";

while($i<15)
{
    $character = chr(mt_rand($down,$up));
    $code .= $character;
    $i++;
}
 //kód készítés vége

$password2=md5($password);

if(isset($_SESSION['user_ID']) and !empty($_SESSION['user_ID']))
{
    header("Location:../regisztracio.php?error=0");
}
elseif (empty($username) || empty($password) || empty($password_re) || empty($fullname) || empty($email) || empty($phone) ||  empty($address))
{
	header("Location:../regisztracio.php?error=1");
}
elseif (check_register_user($username))
{
	header("Location:../regisztracio.php?error=2");
}

elseif ($password!=$password_re)
{
    header("Location:../regisztracio.php?error=3");
}
elseif (strlen($password)<6)
{
    header("Location:../regisztracio.php?error=4");
}

else 
{

$sql="INSERT INTO users(username, password, fullname, email, phone, address, code) VALUES ('$username','$password2','$fullname','$email','$phone','$address','$code')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


$sql1 = "SELECT user_ID FROM users WHERE username = '$username'";
     $result1 = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
   
     if (mysqli_num_rows($result1)>0)
     {
     	while ($record1 = mysqli_fetch_array($result1))
     	$user_id = $record1['user_ID'];
     } 


include("mail.php");
header("Location:../index.php");
}
?>