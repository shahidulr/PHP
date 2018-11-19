
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
1.Logical operator


<?php
    $num1=40;
        $num2=20;
        
        if($num1==40 and $num2==20)
        {
            
            echo "Rina";
            
        }
         if($num1==4 || $num2==20)
        {
            
            echo "Rina";
            
        }
        
            if($num1==4 xor $num2==20)
        {
            
            echo "Rina";
            
        }
        
         
        if($num1!=4)
        {
            
            echo "Rina";
            
        }
       

?>


	</section>


</body>
</html>