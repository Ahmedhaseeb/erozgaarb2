<?php 
	require_once "functions.php";
	//phpinfo();




	echo phpversion();
	die();


	if(function_exists("ucfirst")){

		echo ucfirst("ahmed");
	}else{
		echo "ucfirst does not exist";
	}




	$check = function_exists("ucfirst");
	if($check){
		echo "Function Exists";
	}else{
		echo "Function does not exist";
	}

	die();
	echo strrev("!dlroW olleH");
	echo "<br>";
	echo strrev("Hello World!");
	echo str_repeat("e-Rozgaar", 5);


	echo "<br>";
	echo "i am ".strtoupper("lower");
	
	echo "<br>";
	echo "i am ". strtolower("CAPITAL");



	//$x = 10;
	echo "<br>";
	$name = "wiLLiam";
	echo lcfirst(strtoupper($name));



		$result = Calculate("-", 1, 5);
	echo "<br>";

	print_r($result['addition']);
	echo "<br>";
	print_r($result['subtration']);

	//Fixing Name



	$name = [
			"AhmeD hAsEEb",
			"SuFiAn",
			"AbbAs",
			"aDeeL",
			"asdsdTYTYfghfFTY",
			"this is a book"
	];
	
	echo "<pre>"; 
	print_r(fix_names($name));
	echo "</pre>";



	

?>