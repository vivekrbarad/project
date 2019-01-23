<?php
session_start();

$u = $_POST["uname"];
$p = $_POST['pwd'];

if($u=="admin" && $p=="123"){
    /* $_SESSION["username"]=$u;
    $_SESSION["login"]="OK"; */
    setcookie("username",$u,time()+30,"/");
    setcookie("login","OK",time()+30,"/");
    header("location:session2.php");
}
else{
    echo "Username password incorrect.";
}
?>


    </<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            Session Demo
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
        
    </body>
    </html>

