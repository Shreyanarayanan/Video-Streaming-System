<html>
<head>
    <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
<style>
     div{
        padding-left: 20px;
    }
   .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
   
    </style>
</head>
    
<body >
    <div  class="unlist">
        
    <ul>
        <div class="list">
    <li style="float:right"><a href="logout.php">LOGOUT </a>
    <li><a href="fav.php">Favourites</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="myhome.php">Home</a></li>
     
        </div>
            </ul>
    </div>
<br>
<h1> Payment Stream </h1>
<form action ="payment.php" method="get">
    <div><label class="container">Monthly
  <input type="radio" checked="checked" name="radio" value="month">
  <span class="checkmark"></span>
</label>
<label class="container">Yearly
  <input type="radio" name="radio" value="year">
  <span class="checkmark"></span>
</label>
<label class="container">Quarterly
  <input type="radio" name="radio" value="3mths">
  <span class="checkmark"></span>
        </label>
        <center><input type="submit" name="submit" class="button" value="pay"></center></div></form><br><br><br><br><br><br><br><br><br>
    <!---<center><a href="payment.php" class="button">PAY</a></center>--->
</body>
</html>