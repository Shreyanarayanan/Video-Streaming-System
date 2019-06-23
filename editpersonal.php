<!DOCTYPE html>
<html>
    <head>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 font-weight:bold;
}

.topnav a:hover {
  background-color: blue;
  color: white;
}

.topnav a.active {
  background-color: blue;
  color: white;
}
body {font-family: Arial, Helvetica, sans-serif;
  margin: 0;

}
table,td {
    border:no_border;
    border-collapse: collapse;
    width:60%;
}
th, td {
    padding: 8px;
    text-align: left;
}
        </style></head>
    <body bgcolor=#DEE1E8>
         <div class="topnav">
  <a href="logout.php">Log Out</a>
  <a href="about.html">About Us</a>
             <a href="contact.html">Contact Us</a>
 <a href="videos.html">Videos</a>
 <a href="profile.php">Personal Details</a>
</div>
<?php include("user_login_session.php"); ?>
<?php 
$conn = mysqli_connect("localhost","root","","ovss");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_SESSION["username"];
$sql = "SELECT * FROM userdb where username='$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$d2=$row["name"];
$d3=$row["username"];
$d4=$row["password"];
$d5=$row["dob"];
$d6=$row["gender"];
$d7=$row["email"];
$d8=$row["phoneno"];
$d9=$row["address"];
echo "<center><h2>PERSONAL DETAILS</h2></center>";
echo "<center><h2>USER PROFILE</h2></center>
<div style='padding-left:20px;'>
<form action='persdbedit.php' method='post'>
<fieldset>
<legend>Personal information:</legend>
<table>

<tr>
<td><b>NAME</b></td>
<td><input type='text' value='$d2' name='name'/></td>
</tr>
<tr>
<td><b>USERNAME</b></td>
<td><input type='text' value='$d3' name='username'/></td>
</tr>
<tr>
<td><b>PASSWORD</b></td>
<td><input type='text' value='$d4' name='password'/></td>
</tr>
<br>
<tr>
<td><b>DOB</b></td>
<td><input type='date' value='$d5' name='dob'/></td>
</tr>
<tr>
<tr>
<td><b>GENDER</b></td>
<td><input type='text' value='$d6' name='gender'/></td>
</tr>
<tr>
<td><b>e-MAIL ID</b></td>
<td><input type='email' name='email_id' value='$d7'/></td>
</tr>
<tr>
<td><b>PHONE</b></td>
<td><input type='text' value='$d8' name='phone'/></td>
</tr>
<tr>
<td><b>ADDRESS</b></td>
<td><input type='text' value='$d9' name='address'/></td>
</tr>
</table>
<br><br>
&emsp;&emsp;&emsp;<input type='submit' value='SUBMIT'/>&nbsp;&nbsp;&emsp;
<input type='reset' value='RESET'/></fieldset>
</form>
</div>";
$conn->close();
?>
<br>

</body>
</html>
