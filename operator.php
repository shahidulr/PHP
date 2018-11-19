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

}
	</style>

</head>
<body>

	<section class="phpcoding">
1.Arithmetic operators
<hr>
2.Assigment operators
<hr>
3.Comparison operators
<hr>
4.Increment operators
<hr>
5.Logical operators
<hr>
6.String operators
<hr>
7.Array operators
<hr>
<hr>
<hr>
<hr>
Arithmetic operators
<hr>
<hr>
<hr>
<hr>

<?php
$num1=10;
$num2=15;

echo 'sum of two number:',$num1+$num2;
echo "<br/>";
echo 'sub of two number:',$num1-$num2;
echo "<br/>";
echo 'mul of two number:',$num1*$num2;
echo "<br/>";
echo 'div of two number:',$num1/$num2;
echo "<br/>";
echo 'rem of two number:',$num1%$num2;

echo "<br/>";
echo 'rem of two number:',$num1**$num2;
?>


	</section>
<section class="phpcoding">

<hr>
<hr>
<hr>
<hr>
Assigment operators
<hr>
<hr>
<hr>
<hr>

<?php
$num1=10;
$num2=$num1;


echo $num2;


echo "<br/>";
$num1+=20;


echo $num1;
?>


	</section>

	<section class="phpcoding">

<hr>
<hr>
<hr>
<hr>
Comparison operators
<hr>
<hr>
<hr>
<hr>

<?php
$num1=101;
$num2=101;
$res=$num1===$num2;

$res1=$num1>=$num2;
var_dump($res1)

?>


	</section>


</body>
</html>