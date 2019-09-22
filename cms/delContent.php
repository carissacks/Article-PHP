<?php
	include '../include/db_connection.php';
	include '../function.php';

	if(isset($_POST['type'])):
		$type= $_POST['type'];

		include '../include/databaseTable.php';

		$id = $_POST['id'];
	
		$query = "DELETE FROM $tabelDatabase WHERE id = '$id'";
		$result = $db->query($query);
	
		if($result == true):
			echo"kacau bisa apus";
			var_dump($id);
			var_dump($tabelDatabase);
			header("Location: ".headerAddress()."interface/cms.php");
		endif;
	else:
		// echo"kacau";
		header("Location: ".headerAddress()."interface/cms.php");
	endif;

?>