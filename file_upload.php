<?php

if(isset($_FILES['file']))
{
    
    
    $filename=$_FILES['file']['name'];
      $filetmp=$_FILES['file']['tmp_name'];
    move_uploaded_file( $filetmp,'image/'.  $filename);
    echo "file upload successfully";
}
?>
<html>
   <head>
      <title>file createing</title>
  
      
   </head>

   <body>
     
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"  enctype="multipart/form-data">
    <input type="file" name="file" >
    <input type="submit" value="file upload">
     
</form>


    
   </body>
</html>