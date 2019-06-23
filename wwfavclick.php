<?php

$conn = mysqli_connect("localhost","root","","ovss");
session_start();
$f1=$_SESSION["username"];
$f2="westworld";
 $sql= "INSERT INTO favdb (username, vname) VALUES ('$f1','$f2');";
    
      if(mysqli_query($conn,$sql))
    {
        $f1=$f2=" ";
    echo "<script>
alert('SUBCRIBED SUCCESSFULLY');
window.location.href='ww.php';
</script>";
          
      }