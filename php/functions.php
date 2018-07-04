<?php 

function calculate($op,$val1,$val2)
{
	// if($op == "+"){
		$add = $val1 + $val2;
	// }


	// if($op == "-"){
		$sub = $val1 - $val2;
	// }

	return array("addition" => $add,
				"subtration" => $sub
				);

}


function fix_names($name)
{
	foreach ($name as $key => $value) {
		$fixed_names[] = ucwords(strtolower($value));
	}
	return $fixed_names;
}


?>