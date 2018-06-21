<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP INTRODUCTION</title>
</head>
<body>
	
<?php echo "Hello World!"; ?>

<br>

<?php	

	/* 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, facere neque commodi harum quisquam tempora? Veniam fugiat eveniet, doloribus, quibusdam hic distinctio corporis animi consequatur saepe amet. Natus, hic, qui!		

	 */
	$userName = "Test User"; // username	
	$var1 = 1; 
	$var2 = 2;
	$sum = $var1 + $var2;
	echo $sum;

?>
<br>
<?php
	echo "<br>";
	echo $userName; echo "<br>";
?>
<?php 
	$team = array(1,"abc",2.5,"asdas");
	echo $team[0]; echo "<br>";
	echo $team[1]; echo "<br>";
	echo $team[2]; echo "<br>";
	echo $team[0] + $team[2];

	$abc = 1;


	echo "<pre>";

		print_r($team);

	echo "</pre>";

	var_dump($team);



	$tictactoe = array(

		array(0,1,3),
		array(5,9,1),
		array(8,2,9),

	);


	print_r($tictactoe);


	echo $tictactoe[2][2]; echo "<br>";


	echo $tictactoe[2][1];
?>

</body>
</html>