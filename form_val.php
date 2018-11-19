<?php

 $name =  $email= $Website=$comment= $btnt =" ";
$errname=$erremail=$errwebsite=$errcomment=$errbtnt=" ";

       
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
         
         
         if(empty($_POST["name"]))
         {
             
             $errname="name field is required";
         }
         
         else
         {
             $name    =validate($_POST["name"]); 
             
         }
         
         
            if(empty($_POST["email"]))
         {
             
             $erremail="email field is required";
         }
           elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
         {
            
              $erremail="Invalid Email";
         }
         
         else
         {
             $email =validate($_POST["email"]); 
             
         }
         //$name=$_REQUEST['username'];
          
           $email   =validate($_POST['email']);
           $Website =validate($_POST['Website']);
           $comment =validate($_POST['comment']);
          $btnt     =validate($_POST['rbtn']);
         
         
         /*echo $name."<br>";
          echo $email."<br>";
          echo $Website."<br>";
          echo $comment."<br>";
          echo $btnt ;*/
  
      
            
     }
     function validate($data)
         {
       
             $data=trim( $data);
               $data=stripcslashes( $data);
              $data=htmlspecialchars( $data);
             return $data;
             
         }
           
         
       
       ?>
<html>
   <head>
      <title>Server</title>
  
      
   </head>

   <body>
     
     * required field
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <table>
      
      <tr>
      <td>Name</td><td><input type="text" name="name"   >*<?php echo $errname?></td>
      
      
      </tr>
           <tr>
      <td>E-mail</td><td><input type="text" name="email" >* <?php echo $erremail?></td>
      
      
      </tr>
         </tr>
           <tr>
      <td>Website</td><td><input type="text" name="Website" >* <?php echo $errwebsite?></td>
      
      
      </tr> 
      
              <tr>
      <td>Comment</td><td><textarea name="comment" rows="10" cols="30" ></textarea></td>
      
      
      </tr> 
       
               <tr>
      <td>Gender</td><td><input type="radio" name="rbtn" value="Male" >Male
                   <input type="radio" name="rbtn" value="FeMale">FeMale  * <?php echo $errbtnt?></td>
      
      <td> </td>
      </tr> 
       
       
       
               <tr>
      <td></td><td><input type="submit" name="submit" value="submit"> </td>
      
      
      </tr> 
       
       </table>
       
       
       </form> 
  


    
   </body>
</html>