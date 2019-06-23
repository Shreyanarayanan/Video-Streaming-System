<?php

$conn = mysqli_connect("localhost","root","","ovss");
$sql="UPDATE video SET likes = likes + 1 WHERE vname= '13reasonsy';";
mysqli_query($conn,$sql);
echo"<script>
    window.location.href='13ry.php';
</script>";
?>