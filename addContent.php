<?php
	$host = "localhost";
	$username = "root";
	$dbname = "accumn";
	$password = "";
	$db = new mysqli($host, $username, $password, $dbname);
	
	$category = $_POST['category'];
	$id = $_POST['id'];
	$title = $_POST['title'];
	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    $coverimg = $_FILES['coverimg'];
	$content = $_POST['content'];
	$updated = '0';

	$img = move_uploaded_file($_FILES['coverimg']['tmp_name'],"assets/".$_FILES['coverimg']['name']);
	
	$query = "INSERT INTO ms_category_$category VALUES('$id', '$title', '$date', '$publisher', '$coverimg', '$content', '$updated')";
	$result = $db->query($query);

	if($result == true)
	{
		// header("Location: http://localhost/home.php");
	}
?>