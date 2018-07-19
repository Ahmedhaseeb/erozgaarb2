<?php require_once("connection.php"); ?>
<?php 

	


	if(isset($_POST['action']) AND $_POST['action'] == "update"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$id = $_POST['id'];


		$q  = "UPDATE users set name = ? , email = ?, password = ? WHERE id = ?";
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($name,$email,$pwd,$id));
		if($response){
			echo "Record Updated Successfully";
		}else{
			echo "Failed To Update Record";
		}
	}

	if(isset($_GET['action']) AND $_GET['action']  == "edit"){
		$id = $_GET['id'];
		$q = "SELECT * FROM users where id = ?";
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($id));
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



?>
<h1>User Update Form</h1>
<form method="post" action="">
	<input type="text" value="<?php echo $data[0]['name']; ?>" name="name" placeholder="Enter Name" />
	<input type="text" value="<?php echo $data[0]['email']; ?>" name="email" placeholder="Enter Email" />
	<input type="password" value="<?php echo $data[0]['password']; ?>" name="password" placeholder="Enter Password" />
	<input type="hidden" value="<?php echo $data[0]['id']; ?>" name="id"/>
	<input type="submit" name="Update" value="Update" />

	<input type="hidden" name="action" value="update" />
</form>