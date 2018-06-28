<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If else</title>
</head>
<body>
	<?php

		$day  = date("l");
		if($day == "Monday")
			echo "Today is Monday";
		elseif($day == "Tuesday")
			echo "Today is tuesday";
		elseif($day == "Wednesday")
			echo "Today is Wednesday";
		elseif($day == "Thursday")
			echo "Today is Thursday";
		elseif($day == "Friday")
			echo "Today is Friday";
		elseif($day == "Saturday")
			echo "Today is Saturday";
		elseif($day == "Sunday")
			echo "Today is Sunday";
		else
			echo "You Entered a Invalid Day";
	?>
</body>
</html>