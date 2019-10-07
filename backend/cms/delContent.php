<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';

	if(isset($_POST['type'])):
		$type = $_POST['type'];

		include '../../include/databaseTable.php';
		
		$id = $_POST['id'];
		
		$query = "SELECT cover_img, image_2, image_3, image_4, image_5 FROM $tabelDatabase WHERE id = '$id'";
		$images = $db->query($query);
		
		while($row = $images->fetch_assoc()){
			$path = "images/".$type."/".$row['cover_img'];
			unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
			for($i = 2; $i <= 5; $i++){
				if(empty($row['image_'.$i])){
					break;
				}
				$path = "images/".$type."/".$row['image_'.$i];
				unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");
				
			}
		}
	
		
		$query = "DELETE FROM $tabelDatabase WHERE id = '$id'";
		$result = $db->query($query);
	
		if($result == true):
			headTo("backend/index.php");
		endif;
	else:
			headTo("backend/index.php");
		endif;
?>