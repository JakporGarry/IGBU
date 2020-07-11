<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root','oghenegare69');

mysqli_select_db($con, 'userregistration' );

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from userlog where name = '$name' ";//unsure of this line

$result = mysqli_query ($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken";
}else{
    $reg ="insert into userlog(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration successful";
}

?>