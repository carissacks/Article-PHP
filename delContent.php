<?php
    $host = "localhost";
	$username = "root";
	$dbname = "accumn";
	$password = "";
	$db = new mysqli($host, $username, $password, $dbname);
	
	$category = 'articles';
	$id = $_POST['id'];
	
	$query = "DELETE FROM ms_category_$category WHERE id = '$id'";
	$result = $db->query($query);

	if($result == true)
	{
		header("Location: http://localhost/pemweb/UTS/cms.php");
	}
?>