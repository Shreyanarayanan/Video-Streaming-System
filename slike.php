<?php

$conn = mysqli_connect("localhost","root","","ovss");
$sql="UPDATE video SET likes = likes + 1 WHERE vname= 'suits';";
mysqli_query($conn,$sql);
echo"<script>
    window.location.href='suits.php';
</script>";
?>