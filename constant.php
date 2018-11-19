<?php

$font="arial";
$Name="Rina";
?>

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
min-height: 400px;
}
	</style>

</head>
<body>

	<section class="phpcoding">
	<form action="" method="">
		
<?php

define('value','i am learning php',true);

function learn()
{
	echo  value;
}

 learn();


?>


	</section>


</body>
</html>