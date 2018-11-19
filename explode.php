<html>
   <head>
      <title>filter</title>
   </head>

   <body>
    <h1 style="text-align:center";>Age Calculator:</h1> 
  
    <form  action="" method="post" style="margin-left:43%">
     <input type="date" name="date" value="<?php  echo  $date_of_birth ?>"/>
     <input type="submit" value="ok" name="submit"/>
      
  </form>
<?php
    
    $name="Md Shahidul Islam";
       $name_array=(   explode(" ", $name));
            
            $Name_array=array("my","Name","is","shahidul");
        print_r   ( implode(" ", $Name_array));
    

    ?>
   </body>
</html>