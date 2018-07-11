<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Filehandling</title>
</head>
<body>
<?php 
	

	//reading whole file
	echo "<pre>";
	echo file_get_contents("http://google.com");
	echo "</pre>";
	die();


	//updaing file


	$fp = fopen("abc.txt", "r+");
	$data = fgets($fp);
	fseek($fp,0,SEEK_CUR);
	fwrite($fp,$data);
	fclose($fp);

	die();
	// renaming file
	rename("test.txt", "newFile.txt") or die("failed to rename");

	die();

	//coping file

	copy("test.txt", __DIR__."/data/abc.txt") or die("Failed to copy file");
	


	die();
	//reading file using fgets
	$fp = fopen("test.txt","r");
	while ($text = fgets($fp)) {
		echo $text;
	}
	fclose($fp);




	die();

	// deleteing file also check if it exists
	$filePath = __DIR__ ."/data/test.txt";

	if(file_exists($filePath)){

		echo "File Exists";
		if(unlink($filePath)){
			echo "File deleted Successfully";
		}else{
			echo "Failed To Delete File";
		}

	}else{
		echo "File not found";
	}


	die();
	// opening file and check if it opens successfully

	$file = fopen("test.txt", "a") or die("Failed To open File");

	fwrite($file,"\r\n");
	fwrite($file,"ashjkdhakjshd");
	fwrite($file,"\r\n");
	fclose($file);





	die();
	// write content to file
	$fp = fopen("test.txt", "w");
	$msg = "This is line 1";
	fwrite($fp,$msg);
	fclose($fp);


	//  read content from file.
	$fp = fopen("test.txt", "r");
	$text = fread($fp,1024);
	echo $text;
	fclose($fp);
?>
</body>
</html>