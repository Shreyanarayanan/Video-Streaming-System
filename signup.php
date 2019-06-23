<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="style.css">
    <style>
        td{
            padding: 10px;
        }
        body{
            background-image: url(tv.png);
            background-repeat: no-repeat;
            color: white;
            background-color: darkblue;
            background-size: cover;
        }
    </style></head>
    
<body>
    <div  class="unlist">
        
    <ul>
        <div class="list">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li> <a href="contact.html">Contact Us</a></li>
         <li  style="float:right"><a href="login.php">Login</a></li></div>
            </ul>
</div>
<br><br>
<h2 style="margin-left:45px;"><b>CREATE AN ACCOUNT</b></h2>

<form name="form" method="post" action="signinsert.php">
<table style="padding: 10px;">  <tr><td><b>NAME:</b></td>
    <td><input type="text" name="name" id="name"/></td></tr>

<tr><td><b>USERNAME:</b></td><td>
    <input type="text" name="username" id="username"/></td></tr>
  
 <tr><td>   <b>PASSWORD:</b></td><td>
     <input type="password" name="password" id="password"/></td></tr>

 <tr><td><b> DOB:</b></td><td>
     <input type="date" name="dob"/></td></tr>

  <tr><td><b>GENDER:</b></td><td>
  <input type="radio" name="gender" value="Male" id="gender" checked/>Male
      <input type="radio" name="gender" id="gender" value="Female"/>Female</td></tr>
  
  <tr><td><b>e-MAIL ID:</b></td><td>
      <input type="email" name="email" id="email"/></td></tr>

  <tr><td><b>CONTACT-NO:</b></td><td>
      <input type="text" name="phone" id="phone"/></td></tr>
 
    <tr><td><b>ADDRESS:</b></td><td>
        <input type="text" name="address" id="address"/></td></tr>
  
    
 </table>
 
  <input  class="button" style="margin-left:70px;" type="submit" value="SUBMIT"/>
  <input  class="button" style="margin-left:20px;" type="reset"  value="CLEAR"/>
    
</form>
</body>
</html>
