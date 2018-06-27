<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		function sum()
		{
			echo __FUNCTION__;
		}
		sum();
		die();
		define("five",5);
		define("six",6);

		echo __DIR__; echo "<br>";

		$x = 5;echo __LINE__; echo "<br>";
		echo __FILE__;

	?>
</body>
</html>