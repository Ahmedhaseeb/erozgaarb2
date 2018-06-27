<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flow Control</title>
</head>
<body>

	<?php 	
		print_r($_GET); 
	?>
	<form method="get" action="">
		
		<input type="text" name="num1" placeholder="Enter a number" />
		<input type="text" name="num2" placeholder="Enter a number" />
		<input type="submit" value="sum" />

	</form>

	<?php 
		if( isset($_GET['num1'])  ){

			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			
		echo "Sum of Num1 And Num2 is = "; 
		echo $sum = $num1 + $num2;
		}

	?>

	<?php 
die();



		//Conditional Operator
		// we can not use echo here
		5 > 10 ? print("5 is greater") : print("5 is smaller"); 
		


		die();
		//Switch Case Break
		$day = date('l');
		switch ($day) {
			case 'Monday':
				echo "Today is Monday";
				break;
			case 'Tuesday':
				echo "Today is Tuesday";
				break;
			case 'Wednesday':
				echo "Today is Wednesday";
				break;
			case 'Thursday':
				echo "Today is Thursday";
				break;
			case 'Friday':
				echo "Today is Friday";
				break;
			case 'Saturday':
				echo "Today is Saturday";
				break;
			case 'Sunday':
				echo "Today is Sunday";
				break;
			default:
				echo "You Entered An Invalid Day";
				break;
		}




		die();
		// If - elseif

		$marks = 84.5;
		if($marks >= 85){
			echo "GPA 4";
		}
		elseif($marks < 85 AND $marks >= 70){
			echo "GPA 3.7";
		}
		elseif($marks <= 70 AND $marks >= 60){
			echo "GPA 2.5";
		}else{
			echo "You are Fail";
		}



	?>
</body>
</html>