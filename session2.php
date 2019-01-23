<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//if($_SESSION["login"]=="OK"){
if($_COOKIE["login"]=="OK"){
    //echo $_SESSION["username"];
    echo "Welcome " . $_COOKIE['username'];
    echo "<a href=session3.php>Logout</a>";
}
else{
    echo "You are not logged in";
    echo "<a href=login.html>Click here</a> to login";
}
