<?php
include("connect.php");
session_start();

$uname=$_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
$pay=$_GET["radio"];
if($pay=="month")
{
    $sql="INSERT INTO payment(username, type) VALUES ('$uname','$pay');";
}
else if($pay=="year")
{
    $sql="INSERT INTO payment(username, type) VALUES ('$uname','$pay');";
}
else if($pay=="3mths")
{
    $sql="INSERT INTO payment(username, type) VALUES ('$uname','$pay');";

}

if(mysqli_query($con,$sql))
{
    $uname=$pay="";
        header("location:myhome.php");
    
}
else
{
    echo"<script>alert('error');
    </script>";
}
}
?>
