<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';

	$idxImage = $_POST['idxImage'];	
	$idxContent = $_POST['idxContent'];

	$type = $_POST['type'];
	$id = $_POST['id'];
	$title = $_POST['title'];
	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    $coverimg = $_FILES['coverimg'];
	$content = $_POST['content'];
	$updated = '1';

	if($_FILES['coverimg']['size'] == 0){
		$image = $_POST['oldcoverimg'];
	}
	else{
		$image = $_FILES['coverimg']['name'];
		$img = $_FILES['coverimg']['tmp_name'];
		$filepath = "images/".$type."/".$image;
	}

	$images = array();
	$imagesTmp = array();
	$contents = array();
	$filepathextend = array();

	for($i=1;$i<$idxImage;$i++){
		if($_FILES['idImage-'.$i]['size'] == 0){
			$images[$i] = $_POST['oldidImage-'.$i];
		}
		else{
			$images[$i] = $_FILES['idImage-'.$i]['name'];
			$imagesTmp[$i] = $_FILES['idImage-'.$i]['tmp_name'];
			$filepathextend[$i] = "images/".$type."/".$images[$i];
		}
	}
	for($j=1;$i<$idxImage;$j++){
		$filepathextend[$j] = "images/".$type."/".$images[$j];
	}
	
	for(;$i<5;$i++)
	{
		$images[$i] = NULL;
	}	

	for($i=1;$i<$idxContent;$i++)
	{
		$contents[$i] = $_POST['idContent-'.$i];
	}

	for(;$i<5;$i++)
	{
		$contents[$i] = NULL;
	}	
	
	// ove_uploaded_file($_FILES['coverimg']['tmp_name'],"assets/".$_FILES['coverimg']['name']);
    $query = "UPDATE ms_category_$type SET title = '$title', date = '$date', publisher = '$publisher', cover_img = '$image', content = '$content', image_2= '$images[1]', content_2 = '$contents[1]', image_3='$images[2]', content_3='$content[2]', image_4='$images[3]', content_4='$contents[3]', image_5='$images[4]', content_5='$contents[4]', updated = '$updated' WHERE id = '$id'";
	$result = $db->query($query);

	if($_FILES['coverimg']['size'] != 0){
		
		$path = "images/".$type."/".$_POST['oldcoverimg'];
		unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
		move_uploaded_file($img, $filepath);
	}

	for($j=1;$j<$idxImage;$j++)
	{
		if($_FILES['idImage-'.$j]['size'] != 0){
			echo "bla";
			$path = "images/".$type."/".$_POST['oldidImage-'.$j];
			unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
			move_uploaded_file($imagesTmp[$j], $filepathextend[$j]);
		}
	}

	if($result)
	{
		// header("Location:".headerAddress()."cms.php");
		
		headTo("backend/index.php");
	}
	else
	{
		echo "false";
	}
?>