<?php
session_start();
?>
<html>
   <head>
      <title>Session</title>
   </head>

   <body>
    <h1 style="text-align:center";>Age Calculator:</h1> 
  
    <form  action="" method="post" style="margin-left:43%">
     <input type="date" name="date" value="<?php  echo  $date_of_birth ?>"/>
     <input type="submit" value="ok" name="submit"/>
      
  </form>
<?php
    
$_SESSION['user']="shahidul";
           
   $_SESSION['pass']="1234";
            
            echo "User Name:".$_SESSION['user']."<br>";
             session_unset();
             echo "User Pass:".$_SESSION['pass']."<br>";
    ?>
   </body>
</html>