
<html>
   <head>
      <title>while loop</title>
  
      
   </head>

   <body>
<?php
      $index_array=array(1,2,3,10,4,5);
       
       sort($index_array);
       
       
      for($x=0;$x<count($index_array);$x++)
                           {
                           
                           
                           
                           echo $index_array[$x];
                           }
       
       echo "<br/>";
        rsort($index_array);
             
      for($x=0;$x<count($index_array);$x++)
                           {
                           
                           
                           
                           echo $index_array[$x];
                           }
       
       
       
      
      $index_array=array("a"=>10,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
       
       asort($index_array);
       foreach($index_array as $value=>$value1)
       {
           
           echo $value1;
       }
       
    
       
       
    
       
       ?>

    
   </body>
</html>



