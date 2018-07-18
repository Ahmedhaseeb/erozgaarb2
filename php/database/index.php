<?php 
require_once("connection.php");
if(isset($_SESSION['login']) AND $_SESSION['login'] == "success"){}else{
	header("location: login.php");
}
	if(isset($_GET['logout'])){
		unset($_SESSION['login']);
		session_destroy();

		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<?php
		echo "Welcome ". $_SESSION['name'];

	?>
		<h1 align="center">Create New User</h1>
	<?php 
		if(isset($_POST['email']) AND isset($_POST['password'])){
		$email  =  $_POST['email'];
		$pwd = $_POST['password'];
		$name = $_POST['name'];	
		$q = "INSERT INTO users(`name`,`email`,`password`) VALUES(?,?,?)";

		try {
			$stmt = $db->prepare($q);
			$response = $stmt->execute(array(
							$name,
							$email,
							$pwd
						)
			);		

			if($response){
				echo "User Created";
			}else{
				echo "Failed To Create New User";
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}




	if(isset($_GET['action']) AND $_GET['action'] == "delete"){
		$id = $_GET['id'];
		$q = "DELETE FROM users WHERE id = ?";
		try {
			$stmt = $db->prepare($q);
			$response = $stmt->execute(array(
					$id
				)
			);

			if($response){
				echo "User Delete";

			}else{
				echo "Failed To Delete User";
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


 ?>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Enter Your Name" />
		<input type="email" placeholder="Enter Email" name="email" />
		<input type="password" placeholder="Enter Password" name="password" />
		<input type="submit" value="Add" />
	</form>
	<a href="?logout=1">Logout</a>
	





	<?php 
		$q = "SELECT * FROM users";
		try {
		 	$stmt = $db->query($q);
		 	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
					?>

					<table border="1">
						<thead>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</thead>
						<tbody>


					<?php

		 	foreach ($users as $key => $value) {
		 		?>
							<tr>
								<td><?php echo $value['id']; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['email']; ?></td>
								<td>
									<a href="?action=delete&id=<?php echo $value['id']; ?>">Delete</a>
									/
									<a href="?action=update&id=<?php echo $value['id']; ?>">Update</a>


								</td>
							</tr>

		 		<?php
		 	}
		 	?>
				</tbody>
			</table>
		 	<?php
		 } catch (Exception $e) {
		 	
		 } 
	

	?>


</body>
</html>