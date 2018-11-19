
<html>
<head>
	<title>php syntax</title>

	<style type="text/css">

.phpcoding{
    
    font-family:  <?php echo $font ?>;  
	width: 900px;
	margin: 0 auto;
	background: #ddd;
	padding: 20px;

}
	</style>

</head>
<body>


<section class="phpcoding">
1.conditional operator


<?php
  
   $num=10;
        if($num==10)
        {
            
            echo "Number is equal 10";
        }
       else if($num>=10)
             echo "Number is greater 10";
        
     else if($num<=10)
             echo "Number is  less than 10";
            

?>


	</section>


</body>
</html>