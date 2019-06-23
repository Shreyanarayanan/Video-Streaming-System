<html>
    <head>
        <title>friends</title>
        <link rel="stylesheet" href="style.css">
        <style>
        body{
        background-color: #081631;
            font-family: "Times New Roman", Times, serif;
            color: aliceblue;
            }
            /* Create two columns/boxes that floats next to each other */
aside {
    float: right;
    width: 20%;
    height: 300px; /* only for demonstration, should be removed */
    padding: 20px;
}
            .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
            
        </style>
    </head>
    <body>
        <div  class="unlist">
        
    <ul>
        <div class="list">
    <li style="float:right"><a href="logout.php">LOGOUT </a>
    <li><a href="fav.php">Favourites</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="pay.php">Payment</a></li>
         <li><a href="myhome.php">Home</a></li>
     
        </div>
            </ul>
    </div>
<br>
        <h1>BLACK MIRROR</h1>
        <video width="1020" height="540" controls>
  <source src="bbt.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>    
        <aside>
           <a href="bmlike.php" class="button button2">Like</a><br><br>
            <button class="button button2">Share</button><br><br>
            <a href="bmfavclick.php"class="button button2">Subscribe</a><br><br>
            <form action="save.php">
                COMMENTS:
             <textarea rows="4" cols="30" name="comm" ></textarea><br><br>
                <input type="submit" name="submit">
            </form>
        </aside>
        
    </body>
</html>