<?php 
//POSTfix and prefix 

// $x = 1;
// $y = $x++;
// echo "x is " .$x;
// echo "<BR>";
// echo "y is ".$y;

// die();



//Tasbi::getMessage();
$obj = new Tasbi();
echo Tasbi::$static_var;
echo "<br>";
echo Tasbi::$static_var;
//echo Tasbi::$static_var;
//echo Tasbi::LANGUAGE;

class Tasbi{
	const LANGUAGE = "ENG";
	public $c =0;
	static $static_var = 1;

	static function getMessage(){
		echo "I am static Method";
		echo "<br>";
		echo SELF::$static_var;
	}
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

?>
