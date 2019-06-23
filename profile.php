<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>product</title>
<style>
    .button {
    background-color: azure; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
    .button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
    .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid red;
}

.button3:hover {
    background-color: red;
    color: white;
}

    .topnav {
		margin-top=0;
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
    background-image: url(film.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    }
table,th,td{
border: solid black;
padding: 5px;
margin-top: 100px;
    text-align: center;
}

    input{
        border: none;
    }
	.det{
margin-top:13px;}
</style>
</head>
<body style="background-color: #F4F7FC;">
    <div class="topnav">
  <a href="logout.php">Log Out</a>
  <a href="about.html">About Us</a>
             <a href="contact.html">Contact Us</a>
 <a href="fav.php">Favourites</a>
 <a href="myhome.php">Home</a>
</div>

<center> <?php include("user_login_session.php"); ?>
<?php 
$conn = mysqli_connect("localhost","root","","ovss");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_SESSION["username"];
    $sql = "SELECT * FROM userdb where username='$id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo"<h3>Welcome ".$row["name"]."</h3>";
echo "<center><h2>PERSONAL DETAILS</h2></center>";
echo "<table><tr><th>NAME</th><th>USERNAME</th><th>DOB</th><th>GENDER</th><th>eMAIL</th><th>PHONE NUMBERs<th>ADDRESS</th></tr>";
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["username"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phoneno"]. "</td><td>" . $row["address"]. "</td></tr>";
 echo "</table>";
$conn->close();
?> 

 <br><br> <button class="button button2" onclick="window.location.href='editpersonal.php'">EDIT</button>

    <br><br> <button class="button button3" onclick="con()">DELETE ACCOUNT</button>
</center>
</body>
<script>
    function con()
    { if(confirm("Are you sure?"))
        {
        window.location.href='delete.php';
    }
    }
    </script>
</html>