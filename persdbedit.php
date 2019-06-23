<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{ 
    $id=$_SESSION["username"];
   if($conn = mysqli_connect('localhost','root','','ovss'))
   { $f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9="";

    
     $f2=$_POST["name"];
     $f3=$_POST["username"];
     $f4=$_POST["password"];
     $f5=$_POST["dob"];
     $f6=$_POST["gender"];
     $f7=$_POST["email_id"];
     $f8=$_POST["phone"];
     $f9=$_POST["address"];
     
       
     $sql= "UPDATE userdb SET name='$f2',username='$f3',password='$f4',dob='$f5',gender='$f6',email='$f7',phoneno='$f8',address='$f9' where username='$id';";
    
      if(mysqli_query($conn,$sql))
    {
        $f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9="";
    echo "<script>
alert('SAVED CHANGES');
window.location.href=profile.php';
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