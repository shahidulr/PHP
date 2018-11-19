<?php
session_start();
?>
<html>
   <head>
      <title>coockies</title>
   </head>

   <body>
    <h1 style="text-align:center";>Age Calculator:</h1> 
  
    <form  action="" method="post" style="margin-left:43%">
     <input type="date" name="date" value="<?php  echo  $date_of_birth ?>"/>
     <input type="submit" value="ok" name="submit"/>
      
  </form>
<?php
    
//setcookie(name,value,expire,path,domain,secure,httponly);
  
    
   if(!isset($_COOKIE['visited']))
   {
       
          setcookie("visited","1",time()+86400,"/") or die("not set");
       echo "You first visit";
       
       
   }
            
            else
            {
                echo "You are old member";
                
                
            }
           
    ?>
   </body>
</html>