<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';

	if(isset($_POST['type'])):
		$type = $_POST['type'];

		include '../../include/databaseTable.php';

		$id = $_POST['id'];
		
		$path = "images/".$type."/".$_POST['file'];
		unlink($path) or die("Failed to <strong class='highlight'>delete</strong> file");

		$query = "DELETE FROM $tabelDatabase WHERE id = '$id'";
		$result = $db->query($query);
	
		if($result == true):
			var_dump($id);
			var_dump($tabelDatabase);
			headTo("backend/index.php");
		endif;
	else:
			headTo("backend/index.php");
		endif;
?>