<?php

session_start();

$con = mysqli_connect('localhost', 'root','oghenegare69');

mysqli_select_db($con, 'userregistration' );

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from userlog where name = '$name' && password = '$pass'";//unsure of this line

$result = mysqli_query ($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}

?>