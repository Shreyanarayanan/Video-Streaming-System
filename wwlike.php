<?php

$conn = mysqli_connect("localhost","root","","ovss");
$sql="UPDATE video SET likes = likes + 1 WHERE vname= 'westworld';";
mysqli_query($conn,$sql);
echo"<script>
    window.location.href='ww.php';
</script>";
?>