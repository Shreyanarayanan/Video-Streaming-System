<html>
    <head><title>Favourites</title>
    <link rel="stylesheet" href="style.css">
    <style>
    div{
        padding-left: 20px;
    }
    </style></head>
<body>
   
     <div  class="unlist">
        
    <ul>
        <div class="list">
    <li style="float:right"><a href="logout.php">LOGOUT </a>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="myhome.php">Home</a></li>
     
        </div>
            </ul>
    </div>
     <center><h1>Favourites</h1></center>
<?php
        include("connect.php");
        session_start();
        $user= $_SESSION["username"];
        
       
        
        $query3 = "SELECT vname FROM favdb WHERE username='$user';";
        $result2=mysqli_query($con,$query3);
        while($row = mysqli_fetch_array($result2))
        {
        $video=$row['vname'];
        if ($video=="friends")
        {
        ?>
        
         <div class="container">
       <img src="f.jpg" alt="friends" class="image" style="width:100%">
      <div class="middle">
       <div class="text"><b>FRIENDS</b><br><br>
      <a class="button" href="friends.php">Watch Video</a></div>
               </div></div>
        
        <?php
            }
            else if ($video == "suits")
            {
             ?>
        <div class="container">
  <img src="suits.jpg" alt="suits" class="image" style="width:100%">
  <div class="middle">
    <div class="text"><b>SUITS</b><br><br>
      <a class="button" href="suits.php">Watch Video</a></div>
  </div>
</div>
    <?php
            }
            else if ($video == "blackmirror")
            {
             ?>
    <div class="container ">
  <img src="bm.jpg" alt="Black Mirror" class="image " style="width:100%">
  <div class="middle">
    <div class="text"><b>BLACK MIRROR</b><br><br>
      <a class="button" href="bm.php">Watch Video</a></div>
  </div>
</div>
     <?php
            }
            else if ($video == "got")
            {
             ?>
        <div class="container">
  <img src="got.jpg" alt="got" class="image" style="width:100%">
  <div class="middle">
    <div class="text"><b>GAME OF THRONES</b><br><br>
      <a class="button" href="got.php">Watch Video</a></div>
  </div>
</div>
     <?php
            }
            else if ($video == "westworld")
            {
             ?>
     <div class="container">
  <img src="ww.jpeg" alt="westworld" class="image" style="width:100%">
  <div class="middle">
    <div class="text"><b>WESTWORLD</b><br><br>
      <a class="button" href="ww.php">Watch Video</a></div>
  </div>
</div>
    <?php
            }
            else if ($video == "13reasonsy")
            {
             ?>
    <div class="container">
  <img src="13ry.jpg" alt="13 reasons why" class="image" style="width:100%">
  <div class="middle">
    <div class="text"><b>13 REASONS WHY</b><br><br>
      <a class="button" href="13ry.php">Watch Video</a></div>
  </div>
</div>
    
        <?php
                 }
            }
        ?>


</body>
</html>