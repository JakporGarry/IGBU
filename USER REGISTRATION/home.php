<?php

session_start();
if(!sset($_SESSION['username'])){
    header('location:login.php');
}

?>


<html>
    <head>
        <title> Home Page</title>
    </head>
    <body>
        <a href="logout.php"> LOGOUT</a>
       <h1>hell of a task pheww!!!!!!</h1>
       <h2>welcome anyways <?php echo $_SESSION['username']; ?></h2>
    </body>
</html>