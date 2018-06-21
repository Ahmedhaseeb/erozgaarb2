<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP LECTURE 2</title>
	<style>
		.left{
			float:left;
		}
		.right{
			float:right;
		}
	</style>
</head>
<body>
	<?php 

echo <<<_END


<h1>THis is header</h1>

asdasdasdhaskjdhkjashjk daksdhjk
ahsdkjhaskjd
ahsdkjahskjdhakjs

_END;

		die();

		$msg = "Hello ";

		$name = "Ahmed";
		$str1 = "My Name\t is $name<br>";	
		$str2 = 'My Name\n\t is $name';	
		// echo $str1;
		// echo $str2;

		echo "<div class=\"left\">$str1</div>


		asdasdasd



		asdasdasd


		asdasd";
		echo "<div class=\"right\">$str2</div>";

		// $msg = 'It\'s Ahmed Book';
		// echo $msg;	

		//$msg = $msg . "Ahmed";
		//$msg .= "Ahmed";
		//echo $msg;


		$x = 29 * 1.2;
		echo $x;

		echo "<br>";
		echo substr($x, 0,2);

		$num1 = "3.14";
		$num2 = 5;

		//echo $num1 * $num2;




		echo "<br>";

		define("DOCUMENT_ROOT", __DIR__);
		echo DOCUMENT_ROOT;






	?>



	<!-- 
	<div class="left">
		<?php echo $str1; ?>		
	</div>
	<div class="right">
		<?php echo $str2; ?>		
	</div> 
	-->

</body>
</html>