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
	<?php
	$string="Hello world";
	$len=strlen($string);
	print($len);



$word=str_word_count($string);
$strrev=strrev($string);

echo $strrev;
echo $word;

echo "<br/>";
echo strpos($string,'world');

echo str_replace("world", "Rina", $string);
?>

	</section>


</body>
</html>