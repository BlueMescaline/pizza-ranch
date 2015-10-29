<?php
//ITT MENTSÜK EL A MÁR LÉTEZŐ FELHASZNÁLÓN/ADMINON VÉGZETT VÁLTOZTATÁST
//UPDATE
//

require('db_config.php');
$username=mysqli_real_escape_string($connection,$_POST["username"]);
$password=mysqli_real_escape_string($connection,$_POST["passwd"]);
$password_re=mysqli_real_escape_string($connection,$_POST["passwd2"]);
$fullname=mysqli_real_escape_string($connection,$_POST["fullname"]);
$email=mysqli_real_escape_string($connection,$_POST["email"]);
$phone=mysqli_real_escape_string($connection,$_POST["phone"]);
@$address= mysqli_real_escape_string($connection,$_POST['address']);
$id=$_POST['id'];



if(isset($_POST['type'])){
    if ($_POST['type']=="user"){
        $id=$_POST['id'];

        update_felhasznalo($id, $username, $password, $password_re, $fullname, $email, $phone, $address);
        }

 if ($_POST['type']=="admin"){
    $id=$_POST['id'];
    update_admin($id, $username, $password, $password_re, $fullname, $email, $phone);
        }

}

else{
    exit();
}

function update_felhasznalo($id, $username,$password,$password_re, $fullname, $email, $phone, $address){
    $password2=md5($password);

    if (empty($username) || empty($password) || empty($password_re) || empty($fullname) || empty($email) || empty($phone) ||  empty($address))
    {
           header("Location:../users.php?error=4");
    }

    elseif ($password!=$password_re)
    {
        header("Location:../users.php?error=5");
    }
    elseif (strlen($password)<6)
    {
        header("Location:../users.php?error=6");
    }
    else{
        global $connection;
        $sql="UPDATE users
              SET username='$username', password='$password2', fullname='$fullname',email='$email', phone='$email', address='$address'
              WHERE user_ID='$id'";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


        header("Location:../users.php?error=3");//nem error, sikeres update
    }
}
function update_admin($id, $username,$password,$password_re, $fullname, $email, $phone){

    $password2=md5($password);


    if (empty($username) || empty($password) || empty($password_re) || empty($fullname) || empty($email) || empty($phone))
    {
        header("Location:../admins.php?type=admin&error=4");
    }

    elseif ($password!=$password_re)
    {
        header("Location:../admins.php?type=admin&error=5");
    }
    elseif (strlen($password)<6)
    {
        header("Location:../admins.php?type=admin&error=6");
    }

    else
    {
        global $connection;
        $sql="UPDATE admins
              SET username='$username', password='$password2', fullname='$fullname',email='$email', phone='$email'
              WHERE admin_ID='$id'";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        header("Location:../admins.php?error=3");//nem error, sikeres regisztracio$
    }
}
