<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 



// print the following sequence using nested loop
// *
// * *
// * * *
// * * * *
// * * * * *
// * * * * * *
// * * * * * * *
// * * * * * * * * 
// * * * * * * *
// * * * * * *
// * * * * * 
// * * * * 
// * * *
// * *
// *


$num = 15;
$firstHalf =  round($num/2);
	
for ($row=1; $row <= $firstHalf ; $row++) { 
		for ($column = 0; $column < $row; $column++) { 
			echo "* ";
		}
		echo "<br>";

}

$secondHalf = $num - $firstHalf;
for ($i=$secondHalf; $i > 0; $i--) { 
	for ($j=0; $j < $i; $j++) { 
		echo "* ";
	}
	echo "<br>";
}






die();


//print the following sequence

// * * * * * * * * 
// * * * * * * *
// * * * * * *
// * * * * * 
// * * * * 
// * * *
// * *
// *
$num = 12;
for ($i=$num; $i >= 0 ; $i--) { 

	for ($j=0; $j < $i; $j++) { 
		echo "* ";
	}
	echo "<br>";
	
}

















//print the following Sequence
// *
// * *
// * * *
// * * * *
// * * * * *
// * * * * * *
// * * * * * * *
// * * * * * * * *


// for($row = 1; $row <= $num;$row++){

// 	for ($column = 0; $column < $row; $column++) { 

// 		echo "* ";
// 	}
// 	echo "<br>";
// }




	// fabonacci Series
	// 1 1 2 3 5 8 .....
	echo "Fabonacci Series: ";
	$num = 20;
	$oldfab = "";
	$newfab = "";
	$first = 0;
	$second = 1;
	$fab = 0;
	echo $first . " " . $second. " ";
	for($i=2;$i<$num;$i++){
		$third = $first + $second;
		echo $third . " " ;
		$first = $second;
		$second = $third;
	}
	die();
	

	//Prime Number
		
		$num = 101;
		$checkPrime = true;
		for($i = 2;$i < $num/2; $i++){
			if($num%$i == 0){
				$checkPrime = false;
				break;
			}

		}
		if($checkPrime){
			echo "$num is Prime Number";
		}else{
			echo "$num Not Prime";
		}


	?>
</body>
</html>