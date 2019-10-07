<?php 
	include '../include/header.php';
	include '../include/db_connection.php';
?>
<body>
	<?php
		if(isset($_POST['type'], $_POST['id'])){	
			// $type = $db->real_escape_string($_POST['type']);
			$type = $_POST['type'];
			include '../include/databaseTable.php';

            // $id = $db->real_escape_string($_POST['id']);
			$id = $_POST['id'];
			
            $query = "SELECT * FROM $tabelDatabase WHERE id = '$id'";
			$result = $db->query($query);
			// $query = $db->prepare("SELECT * FROM ? WHERE id = ?");
			// $query->bind_param("sss", $tabelDatabase, $id);
			// $result= $query->execute();

            while($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $date = $row['date'];
                $publisher = $row['publisher'];
                $coverimg = $row['cover_img'];
				$content = $row['content'];
            }

			mysqli_free_result($result);
            mysqli_close($db);
		}
		else{
			header("Location: ".headerAddress()."interface/pagenotfound.php");
		}
	?>
    <div class="container">
		<form class="form" action="./cms/updateContent.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="id">ID</label>
                <input type="text" class="input form-control" name="id" value="<?php echo $id?>" disabled placeholder="Insert ID">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="input form-control" name="title" value="<?php echo $title?>" required placeholder="Insert Title">
			</div>
			<div class="form-group">
				<label for="date">Date</label>
                <input type="date" class="input form-control" name="date" value="<?php echo $date?>" required placeholder="Insert Date">
			</div>
			<div class="form-group">
				<label for="publisher">Publisher</label>
				<input type="text" class="input form-control" name="publisher" value="<?php echo $publisher?>" required placeholder="Insert Publisher">
            </div>
            <div class="form-group">
				<label for="cover">Cover Image</label>
                <input type="file" class="input form-control" name="coverimg" value="<?php echo $coverimg?>" required placeholder="Insert Cover Image" accept='image/*'>
			</div>
            <div class="form-group">
				<label for="content">Content</label>
                <input type="text" class="input form-control" name="content" value="<?php echo $content?>" required placeholder="Insert Content">
			</div>

			<input type="text" class="input form-control hidden" name="type" required value="<?php echo $type?>">
			<input type="text" class="input form-control" name="id" value="<?php echo $id?>" hidden>
			<button type="submit" class="btn btn-primary">Submit</button>
			<button class="btn btn-secondary"><a href="<?=headerAddress()?>index.php" style="color: white">Cancel</a></button>
		</form>
	</div>
</body>
</html>