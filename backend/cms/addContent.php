<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';
	//date_default_timezone_set('Asia/Jakarta');

	$type = $_POST['type'];
    include '../../include/databaseTable.php';

	$idxImage = $_POST['idxImage'];	
	$idxContent = $_POST['idxContent'];	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$date = $_POST['date'];
    $publisher = $_POST['publisher'];
    
	$content = $_POST['content'];
	$updated = '0';
	$image = $id.'0'.$_FILES['coverimg']['name'];
	$img = $_FILES['coverimg']['tmp_name'];
	$filepath = 'images/'.$type.'/'.$image;
    	
	$contents = array();
	for($i=1;$i<$idxContent;$i++)
	{
		$contents[$i] = $_POST['idContent-'.$i];
	}
	for(;$i<5;$i++)
	{
		$contents[$i] = NULL;
	}

	$images = array();
	$imagesTmp = array();
	for($i=1;$i<$idxImage;$i++)
	{
		$images[$i] = $id.$i.$_FILES['idImage-'.$i]['name'];
		$imagesTmp[$i] = $_FILES['idImage-'.$i]['tmp_name'];
	}
	for($i;$i<5;$i++)
	{
		$images[$i] = NULL;
		$imagesTmp[$i] = NULL;
	}

	$filepathextend = array();
	for($j=1;$j<$idxImage;$j++)
	{
		$filepathextend[$j] = "images/".$type."/".$images[$j];
	}
	
    $query = "INSERT INTO $tabelDatabase (id, title, date, publisher, cover_img, content, image_2, content_2, image_3, content_3, image_4, content_4, image_5, content_5, updated)
			VALUES('$id','$title','$date','$publisher','$image','$content','$images[1]','$contents[1]','$images[2]','$contents[2]','$images[3]','$contents[3]','$images[4]','$contents[4]',0);";
	$result = mysqli_query($db, $query);
	
	move_uploaded_file($img, $filepath);
	for($j=1;$j<$idxImage;$j++)
	{
		move_uploaded_file($imagesTmp[$j], $filepathextend[$j]);
	}
	
    if($result == true):
			headTo('../index.php?type='.$type);
		endif;
	
?>