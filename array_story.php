<?php

 $arr=array();



    if(isset($_POST['text']))
    {
        global $txt;
        $txt=$_POST['text'];
          
       echo $arr[0]=  $txt;     

    
}



    ?>
<html>
   <head>
      <title>filter</title>
   </head>

   <body>
    <h1 style="text-align:center";>Age Calculator:</h1> 
  
    <form  action="" method="post" style="margin-left:43%">
     <input type="text" name="text" value="<?php   global $txt; echo  $txt; ?>"/>
     <input type="submit" value="ok" name="submit"/>
       
  </form>

   </body>
</html>