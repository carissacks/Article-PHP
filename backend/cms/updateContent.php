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

	// $img = move_uploaded_file($_FILES['coverimg']['tmp_name'],"assets/".$_FILES['coverimg']['name']);
    $query = "UPDATE ms_category_$type SET title = '$title', date = '$date', publisher = '$publisher', cover_img = '$image', content = '$content', updated = '$updated' WHERE id = '$id'";
	$result = $db->query($query);

	if($result == true)
	{
		// header("Location:".headerAddress()."cms.php");
		// echo "success";
		headTo("backend/index.php");
	}
	else
	{
		echo "false";
	}
?>