
<html>
   <head>
      <title>Server</title>
  
      
   </head>

   <body>
       
       
       <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
       
       <input type="text" name="username"/>
           
           <input  type="submit" name="submit" value="ok"/>
       </form>
<?php
       
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
         
         //$name=$_REQUEST['username'];
         $name=$_POST['username'];
         if(empty($name))
         {
             
             echo "UserName must be field";
         }
         
         else
         {
             
              echo "You are submited";
         }
            
     }
       
       ?>

    
   </body>
</html>



