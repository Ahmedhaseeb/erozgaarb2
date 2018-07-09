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


		class Student{

			private $name;
			private $rollno;


			public function __construct($name,$roll)
			{
				$this->name = $name;
				$this->rollno = $roll;	
			}

			public function __destruct()
			{
				echo $this->name . " going to destroy<br>";
			}

			public function put_data($name,$roll){
				$this->name = $name;
				$this->rollno = $roll;	
			}
			public function get_data(){
				echo $this->name;
				echo "<br>";
				echo $this->rollno;
				echo "<br>";
			}
		}

		$student1 = new Student("ahmed","BSCS");
		$student2 = new Student("abc","Ghjghj");
		


		print_r($student1);

		$abc = $student1;


		$abc->put_data("New Name","New Roll No");
		print_r($student1);
		print_r($abc);
		
		//$student->name = "Ahmed";
		//$student->rollno = "BSCSF13E066";
		
		//$student1->put_data("Ahmed","BSCSF13");
		//$student2->put_data("abc","BSCSF14");
		

		//$student1->get_data();
		//$student2->get_data();

	?>
</body>
</html>