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


echo "I love you ","Rina";
echo "<br/>";
//print "I love you ","Rina";
$var="shahidul";
var_dump($var);
echo "<br/>";


$var=print("shahidul");
var_dump($var);

?>
	<hr/>
		<hr/>
1.string
	<hr/>
	<hr/>

<?php
 echo "My Name is Shahidul Islam";

 $Name='My Name is Shahidul Islam';

echo "<br/>";
print $Name;

echo "<br/>";

echo "2.Integer";
echo "<br/>";



$Num=25;
print($Num);

?>

3.float

<?php
$Num=20.56;

echo $Num;
?>
	

	<hr>

	<?php
$Num=true;
var_dump($Num);
echo $Num;
?>	
<hr>
3.array


	<?php
$array=array("shahidul","maruf","shahin" );

echo $array[0];
?>


<hr>
3.object


	<?php
/**
* 
*/
class rina
{
	
	

	function name()
	{

		return "physics";
	}
	function name1()
	{

		echo  $this->name();
	}
}

$st=new rina();
$st->name1();
?>	
	<?php
$V=null;
var_dump($V);
?>

	</section>


</body>
</html>