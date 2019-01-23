<?php

session_start();

//unset($_SESSION['login']);
//session_unset();
//session_destroy();
setcookie("login","",time()-100,"/");
header("location:login.html");