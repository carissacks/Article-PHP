<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';
	
	$type = $_POST['type'];
	$id = $_POST['id'];
	$title = $_POST['title'];
	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    $coverimg = $_FILES['coverimg'];
	$content = $_POST['content'];
	$updated = '0';
	$image = $_FILES['coverimg']['name'];
	$img = $_FILES['coverimg']['tmp_name'];
	$filepath = "images/".$image;
	
	$query = "INSERT INTO ms_category_$type  VALUES('$id', '$title', '$date', '$publisher','$image', '$content', '$updated')";

	$result = $db->query($query);
	
	if (move_uploaded_file($img, $filepath)) {
		$msg = "Image uploaded successfully";
		if($result)
		{
			echo "success";
			headTo("interface/cms.php");
			// header("Location: ".headerAddress()."interface/cms.php");
		}
		else
		{
			echo "failed";
		}
	}else{
		$msg = "Failed to upload image";
	}
?>