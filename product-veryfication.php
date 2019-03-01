<?php


$server="localhost";
$username="root";
$pwd="8306682132";
$database="new_db";


$pname=$_POST["pro-name"];
$pcompany=$_POST["pro-company"];
$category=$_POST["category"];
$price=$_POST["price"];
$weight=$_POST["weight"];
$exdate=$_POST["ex-date"];
$color=$_POST["color"];
$specification=$_POST["spec"];
$img=$_POST["image"];


$conn=new mysqli($server,$username,$pwd,$database);

if($conn->connect_server)
{
    die("connection failed" . $conn->connect_error);
}
$sql="insert into pro_tb(pro_name,pro_company,category,price,weight,ex_date,color,spectification,profile_pic) values('$pname','$pcompany','$category','$price','$weight','$exdate','$color','$specification','$img')";
echo $sql;

$target_dir="images/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file ($_FILES["file"]["tmp_name"],`$target_file`);



if($conn->query($sql)==true)
    {
        echo"one row inserted";
    }
    else
    {
        echo"error in datebase";
    }
    $conn->close();

?>