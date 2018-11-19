
<html>
   <head>
      <title>while loop</title>
  
      
   </head>

   <body>
<?php
       
       
       $x=10;
       $y=15;
       
       
       function test()
       {
           $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
           
           
       }
test();
       echo $z;
    
       
       
    
       
       ?>

    
   </body>
</html>



