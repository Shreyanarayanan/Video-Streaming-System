<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    
   if($conn = mysqli_connect('localhost','root','','ovss'))
   {  $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8="";

     $f1=$_POST["name"];
     $f2=$_POST["username"];
     $f3=$_POST["password"];
     $f4=$_POST["dob"];
     $f5=$_POST["gender"];
     $f6=$_POST["email"];
     $f7=$_POST["phone"];
     $f8=$_POST["address"];
     
      
       
     $sql= "INSERT INTO userdb (name,username,password,dob,gender,email,phoneno,address) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8');";
    
      if(mysqli_query($conn,$sql))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
    echo "<script>
alert('SIGN-UP SUCCESSFUL');
window.location.href='myhome.php';
</script>";
          
      }
    else
    {echo '<script language="javascript">';
echo 'alert("Error3")';
echo '</script>';
    }
   $conn->close();
   }
    else
    {echo '<script language="javascript">';
echo 'alert("Error2")';
echo '</script>';
    }
 
    
    
}
else
    {echo '<script language="javascript">';
echo 'alert("Error1")';
echo '</script>';
    }
     





?>