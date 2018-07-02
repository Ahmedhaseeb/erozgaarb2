<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 

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