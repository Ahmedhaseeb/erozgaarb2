<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Object Oriented Programming(OOP)</title>
</head>
<body>
	<?php 

		// $name  = "Ahmed";
		// $abc = $name;
		// $abc = "xyz";

		// echo $abc;
		// echo $name;

class Tasbi{
	public $c =0;
	public function show()
	{
		echo $this->c;

	}
	public function reset()
	{
		$this->c=0;

	}
	public function plus()
	{
		$this->c++;
		}
	}

	$s1= new Tasbi();
	// $s1->show();
	// $s1->plus();
	// $s1->show();
	// $s1->reset();
	$s1->show();
	for ($i=0; $i <= 10; $i++) { 
		$s1->plus();
		echo "<br>";
		$s1->show();
	}
	?>

<form method="GET">
	<input id="displyScreen" type="text" readonly="" value="0"><br>
	<input id="addBtn" type="button" name="add" value="PlusOne" onclick="addOne();" > <br>
	<input id="resetBtn" type="button" name="reset" value="Reset" onclick="resetScreen();">
</form>




<script>
	function addOne() {
		var screen = document.getElementById("displyScreen");
		oldValue = parseInt(screen.value);
		newValue = oldValue + 1;
		screen.value = newValue;
	}
	function resetScreen() {
		var screen = document.getElementById("displyScreen");
		screen.value = 0;
	}
</script>
</body>
</html>