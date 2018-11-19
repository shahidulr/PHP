<?php
session_start();
?>
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
    

    foreach(filter_list() as $id=>$value)
    {
        
        
        echo $value." ".filter_id($value)."<br>";
    }
         
            
            $str="<h6>shahidul</h6>";
            $newstr=filter_var($str,FILTER_SANITIZE_STRING);
            echo     $newstr."<br>";
            
            $int=15.6;
            
            if(filter_var($int,FILTER_VALIDATE_INT))
            {
                
                echo "int";
            }
            else
            {
                
                echo "not Integir";
            }
            
            
               echo     "<br>";
            
            $ip="127.0.0.10";
            
            if(filter_var($ip,FILTER_VALIDATE_IP))
            {
                
                echo "Valid ip";
            }
            else
            {
                
                echo "inValid ip";
            }
                      echo     "<br>";
            
            $email="shahidul@gmail.com";
            
            if(filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                
                echo "Valid Email";
            }
            else
            {
                
                echo "inValid Email";
            }
            
        echo   "<br>Advance<br>";
            
            $intnum=100;
            $min=1;
            $max=200;
            
            
            if(filter_var($intnum,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,
                                                                            "max_range"=>$max))))
            {
                
                echo "valid";
            }
            else
            {
                echo "InValid";
            }
            echo "<br>";
            
            $url="http://www.shahidul.com?index.php";
              
            if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED))
            {
                
                echo "valid";
            }
            else
            {
                echo "not query string";
            }
    ?>
   </body>
</html>