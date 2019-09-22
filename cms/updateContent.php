<?php
	include '../include/db_connection.php';
	include '../function.php';

	$category = $_POST['category'];
	$id = $_POST['id'];
	$title = $_POST['title'];
	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    $coverimg = $_FILES['coverimg'];
	$content = $_POST['content'];
	$updated = '0';

	$img = move_uploaded_file($_FILES['coverimg']['tmp_name'],"assets/".$_FILES['coverimg']['name']);
	
    $query = "UPDATE ms_category_$category SET title = '$title', date = '$date', publisher = '$publisher', cover_img = '$coverimg', content = '$content', updated = '$updated' WHERE id = '$id'";
	$result = $db->query($query);

	if($result == true)
	{
		header("Location:".headerAddress()."cms.php");
	}
?>