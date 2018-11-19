<?php

//echo readfile('text.txt');

$user=fopen('text.txt','r') or die('file not found'); 
//echo fread($user,filesize("text.txt"));

while(!feof($user))
{
   echo fgets($user,filesize("text.txt")); 
    
}

while(!feof($user))
{
   echo fgetc($user); 
    
}
fclose($user);



       ?>
<html>
   <head>
      <title>Server</title>
  
      
   </head>

   <body>
     
  
  


    
   </body>
</html>