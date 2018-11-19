<?php

$date_of_birth ="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $date_of_birth = new DateTime($_POST['date']);
    
}

$current_date = new DateTime();
$diff =  $current_date->diff($date_of_birth);

echo "Your Current Age:" . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";


       ?>
<html>
   <head>
      <title>Server</title>
  
      
   </head>

   <body>
     
  <form  action="" method="post">
     <input type="date" name="date" value="<?php  echo  $date_of_birth ?>"/>
     <input type="submit" value="ok" name="submit"/>
      
  </form>
  


    
   </body>
</html>