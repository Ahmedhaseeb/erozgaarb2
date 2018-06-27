<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php 

//$count = 0;
function keep_track(){
	STATIC $count = 5;
	echo $count = $count + 1;
	echo  "<br>";
}


keep_track();
keep_track();
keep_track();



die();

$counter = 0;
function globalScope(){
	global $counter;
	echo $counter = $counter + 1;
	echo  "<br>";
}


globalScope();
globalScope();
globalScope();





die();
$total = 2;

function avg($x ,$y)
{
	global $total;
	$avg = ($x + $y)/$total;	
	echo $avg;
	
}


//echo $total;
echo "<br>";
avg(1,5);

















die();






















echo abs(20);







die();
$x = 10;
$y = 20;


$p = 20;
$q = 10;
function add($num1, $num2){
	$sum=$num1+$num2;
	echo "Addition of $num1 and $num2 is = ".$sum;
}


add($x,$y);

function sub(&$num1, &$num2){
	$sum=$num1+$num2;
	echo "Addition of $num1 and $num2 is = ".$sum;
}

sub($p,$q);


die();
























		$x = 5;
		$y = 10;
		function sum(&$val1, &$val2)
		{	
			$val1 =  $val1 + 2;
			return $val1 + $val2;	
		}



		echo "Sum is: "; 
		echo sum($x,$y); 
		echo "<br>";

		echo '$x = '; echo $x; echo "<br>";
		echo '$y = '; echo $y; echo "<br>";

		die();

	?>



	<?php
		$x=6;
		$y=9;
		// echo $x + $y + 6;
		//<h1>aasd</h1>
		$a = array(1,"abc",3.5);
		// echo $a[1];
		echo $a[0]+$a[2];
		// print_r($a);
	?>
</body>
</html>