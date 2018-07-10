<?php 

class Person{
	public $name;
	public $gender;
	public $cnic;
	public $age;


	public function __construct($name,$gender,$cnic,$age){
		 $this->name = $name;
		 $this->gender = $gender;
		 $this->cnic = $cnic;
		 $this->age = $age;
	}
	//final public function eat()
	public function eat()
	{
		echo "i am parent class eat function";
	}

}

class Employee extends Person{
	public $emp_id;
	public $salery;

	public function __construct($emp_id,$salery){
		parent::__construct("Ahmed","male","35404",20);
		$this->emp_id = $emp_id;
		$this->salery = $salery;
	}
	public function eat()
	{
		echo "i am child class eat function";
	}

}

class Trainer extends Employee{

}


class Labmanger extends Employee{

}

class Student extends Person{
	public $rollno;
}

class Doctors extends Person{
	public $speciality;
}

$emp1 = new Employee(1,20);

$emp1->eat();


//$emp1->eat();
//print_r($emp1);

?>