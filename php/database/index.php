<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$db = new PDO('mysql:host=localhost;dbname=erozgar_2018;charset=utf8mb4', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);





		
		try {
			

			$id = $_GET['id'];
			//$stmt = $db->prepare("SELECT * FROM students where id > ?");
			//$stmt = $db->prepare("DELETE FROM students where id = ?");
			
			$stmt = $db->prepare("UPDATE students set name = 'abc' , rollno='123' where id = ?");
			
			$stmt->execute(array($id));

			


			//$stmt = $db->query("SELECT * FROM students WHERE id > $id");
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			print_r($results);
		} catch (Exception $e) {
			echo $e->getMessage();
			//echo "You enter a wrong query";
		}

		
		

		// echo "<pre>";
		// print_r($results);
		// echo "</pre>";


	?>
</body>
</html>