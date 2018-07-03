<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Arrays</title>
</head>
<body>
	<?php


		$msg = "This is my laptop";

		$array2 = explode(" ",$msg);
		print_r($array2);

		echo "<br>";

		$getBackMsg = implode(" ", $array2);
		echo $getBackMsg;
		die();

		$numbers = array(1,9,7,3,8,0,34);
		$number1 = array(1,2,3,4,5,6,7);	

		rsort($numbers);
		$p = end($number1);
		reset($number1);
		print_r($number1);



		die();
		// is_array function
		$x	 = array("Asdas","Asdasd");

		is_array($x) ? print("Array") : print("Not Array");
		die();

		//displaying MultiDimentional Array


		$paper[0] = "Copier";
		$paper[1] = "Inkjet";
		$paper[2] = array("asd",234,"3453");
		$paper[3] = "Photo";
		foreach ($paper as $key => $value) {
			if(is_array($value)){
				foreach ($value as $key => $value) {
					echo $value ."<br>";
				}
			}else{
				echo $value ."<br>";
			}
		}


		die();
		// list 
		list($firstName, $lastName) = array("Ahmed" , "Haseeb");

		echo $firstName ." ". $lastName;
		die();
		//foreach alternative using list and each
		

		//Associative Array
		$trainer = array(
			"Name" => "AhmedHaseeb",
			"Designation" => "Trainer",
			"Course Track" => "Techincal"
		);



		while ( list($key,$value) = each($trainer) ) {
			echo $key . " " . $value;
			echo "<br>";
		}


		die();
		//continue using for loop
		for ($i=0; $i < 10; $i++) { 
			if($i == 5)
				continue;
			echo $i ."<br>";
		}
		die();
		//Associative Array
		$trainer = array(
			"Name" => "AhmedHaseeb",
			"Designation" => "Trainer",
			"Course Track" => "Techincal"
		);

		$count = 0;
		foreach ($trainer as $index => $value ) {
			if($count == 1){
				$count++;
				continue;
			}
			echo $index. " ". $value ."<br>";
			$count++;
		}

		//print_r($trainer);
		//echo $trainer['Name'];
		die();
		$paper[] = "Copier";
		$paper[] = "Inkjet";
		$paper[] = array("asd",234,"3453");
		$paper[] = "Photo";
		
		$size = count($paper,true);
		echo $size;




		die();
		for($i = 0;$i<$size;$i++){
			echo $paper[$i]."<br>";
		}


		die();
		echo "<pre>";	

		print_r($paper);

		echo "</pre>";

	?>
</body>
</html>