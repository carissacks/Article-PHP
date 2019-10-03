<?php
	include '../../include/db_connection.php';
	include '../../include/function.php';

	if(isset($_POST['type'])):
		// $type = $db->real_escape_string($_POST['type']);
		$type = $_POST['type'];

		include '../include/databaseTable.php';

		// $id = $db->real_escape_string($_POST['id']);
		$id = $_POST['id'];
	
		$query = "DELETE FROM $tabelDatabase WHERE id = '$id'";
		$result = $db->query($query);
	
		if($result == true):
			var_dump($id);
			var_dump($tabelDatabase);
			headTo("interface/cms.php");
		endif;
	else:
		headTo("interface/cms.php");
	endif;

?>