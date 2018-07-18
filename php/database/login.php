<?php 
require_once("connection.php");	
if(isset($_SESSION['login']) AND $_SESSION['login'] == "success"){

	header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_POST['email']) AND isset($_POST['password'])){
		$email  =  $_POST['email'];
		$pwd = $_POST['password'];	
		$q = "SELECT * FROM users where email = ? AND password= ?";

		$stmt = $db->prepare($q);
		$stmt->execute(array(
						$email,
						$pwd
					)
		);
		if($stmt->rowCount() > 0){
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$_SESSION['login'] = "success";
			$_SESSION['name'] = $data[0]['name'];
			header('location: index.php');

		}else{
			echo "Invalid Login Details";
		}

				
	}




	?>


	<form action="" method="post">
		<input type="email" name="email" />
		<input type="password" name="password" />
		<input type="submit" value="Login" />
	</form>
</body>
</html>