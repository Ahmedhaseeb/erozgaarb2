<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
	<?php

		//Implicit Type Casting
		$x = 10;
		$y = 3;

		$z =  (int)($x/$y);
		echo $z;

		die();
		//foreach loop 
		$students = array("asd",
		 				  "Zubair",
		 				  "Adeel",
		 				  "Awais",
		 				  "Aqeel",
		 				  "Abbas"
		 				);

		echo "Total No of Students We Have " .count($students);
		die();
		for ($i=0; $i < count($students); $i++) { 
			echo $students[$i];
			echo "<br>";
		}
		// foreach ($students as $key => $value) {
		// 	echo $key . " => " .$value . "<br>";
		// }


		 die();
		// // do - while Loop
		$x = 12;
		do{
			echo "I Love Pakistan<br>" ;
			$x++;
		}while($x < 10);


		die();
		//print table of 4
		$x = 1;
		while($x <= 10){
			echo "4 x $x = ". 4 * $x;
			echo "<br>";
			$x++;
		}




		die();
		//printing odd number from 0 to 100 using for loop
		for($i=0;$i <= 100;$i++){
			$y=$i%2;
			if($y!=0){ 
				echo "the odd number is $i"."<br>";
			}
		}






	?>
</body>
</html>